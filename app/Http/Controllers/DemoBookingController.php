<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\DemoBooking;

class DemoBookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course' => 'required|string',
            'teacherPref' => 'required|string',
            'feedback' => 'nullable|string',
            'classSelect' => 'required|string',
            'dateSelect' => 'required|string',
            'timeSelect' => 'required|string',
            'emailInput' => 'required|email',
            'parentName' => 'required|string',
            'childName' => 'required|string',
            'mobile' => 'nullable|string'
        ]);

        $booking = new DemoBooking();
        $booking->course = $validated['course'];
        $booking->teacher_preference = $validated['teacherPref'];
        $booking->feedback = $validated['feedback'];
        $booking->class_age_group = $validated['classSelect'];
        $booking->date_preference = $validated['dateSelect'];
        $booking->time_preference = $validated['timeSelect'];
        $booking->email = $validated['emailInput'];
        $booking->parent_name = $validated['parentName'];
        $booking->children_name = $validated['childName'];
        $booking->mobile = $validated['mobile'] ?? null;
        $booking->save();

        return response()->json(['success' => true]);
    }

    public function destroy(DemoBooking $demoBooking): RedirectResponse
    {
        $demoBooking->delete();

        return redirect()->route('view-data')->with('status', 'Demo booking deleted successfully.');
    }
}
