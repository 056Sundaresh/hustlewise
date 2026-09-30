<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoBookingController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherApplicationController;

Route::get('/', function () {
    return view('index');
});

Route::get('/book-demo', function () {
    return view('book_demo');
})->name('demo.book');
Route::post('/book-demo', [DemoBookingController::class, 'store']);
Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('courses.show');
Route::delete('/demo-bookings/{demoBooking}', [DemoBookingController::class, 'destroy'])->name('demo-bookings.destroy');

Route::get('/teacher-login', function () {
    return view('teacher_login');
})->name('teacher.join');
Route::post('/teacher-login', [TeacherApplicationController::class, 'store']);
Route::delete('/teacher-applications/{teacherApplication}', [TeacherApplicationController::class, 'destroy'])->name('teacher-applications.destroy');

Route::get('/view-data', function () {
    return view('admin_data', [
        'demo_bookings' => \App\Models\DemoBooking::all(),
        'teacher_applications' => \App\Models\TeacherApplication::all()
    ]);
})->name('view-data');

Route::get('/view-resume/{id}', function ($id) {
    $application = \App\Models\TeacherApplication::findOrFail($id);
    if (!$application->resume_base64) {
        return abort(404, 'No resume found.');
    }
    
    $pdfData = base64_decode($application->resume_base64);
    
    return response($pdfData)
        ->header('Content-Type', 'application/pdf')
        ->header('Content-Disposition', 'inline; filename="' . str_replace(' ', '_', $application->first_name) . '_resume.pdf"');
});
