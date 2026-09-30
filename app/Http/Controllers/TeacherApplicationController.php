<?php

namespace App\Http\Controllers;

use App\Models\TeacherApplication;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TeacherApplicationController extends Controller
{
    public function store(Request $request)
    {
        $file = $request->file('resumeFile');

        if (! $file || ! $file->isValid()) {
            $uploadError = $file?->getError();
            $message = match ($uploadError) {
                UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE => 'The resume must be 20 MB or smaller.',
                UPLOAD_ERR_NO_TMP_DIR => 'The server has no writable temporary upload directory. Please check the PHP upload configuration.',
                UPLOAD_ERR_CANT_WRITE, UPLOAD_ERR_EXTENSION => 'The server could not save the uploaded resume. Please try again or contact support.',
                default => 'Please upload a valid PDF resume.',
            };

            return response()->json([
                'message' => $message,
                'errors' => ['resumeFile' => [$message]],
            ], 422);
        }

        $validated = $request->validate([
            'firstNameInput' => 'required|string',
            'fullNameInput' => 'required|string',
            'phoneInput' => 'required|string',
            'emailInput' => 'required|email',
            'genderSelect' => 'required|string',
            'ageInput' => 'required|integer',
            'qualificationInput' => 'required|string',
            'degreeInput' => 'required|string',
            'experience' => 'required|string',
            'certifications' => 'nullable|array',
            'resumeFile' => 'required|file|mimes:pdf|min:1|max:20480',
        ]);

        $resumeBase64 = base64_encode($file->getContent());

        $application = new TeacherApplication;
        $application->first_name = $validated['firstNameInput'];
        $application->full_name = $validated['fullNameInput'];
        $application->phone = $validated['phoneInput'];
        $application->email = $validated['emailInput'];
        $application->gender = $validated['genderSelect'];
        $application->age = $validated['ageInput'];
        $application->qualification = $validated['qualificationInput'];
        $application->degree = $validated['degreeInput'];
        $application->experience = $validated['experience'];
        $application->certifications = json_encode($validated['certifications'] ?? []);
        $application->resume_base64 = $resumeBase64;
        $application->save();

        return response()->json(['success' => true]);
    }

    public function destroy(TeacherApplication $teacherApplication): RedirectResponse
    {
        $teacherApplication->delete();

        return redirect()->route('view-data')->with('status', 'Teacher application deleted successfully.');
    }
}
