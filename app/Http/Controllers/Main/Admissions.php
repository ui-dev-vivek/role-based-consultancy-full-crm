<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\AdmissionInquiry;
use Illuminate\Http\Request;

class Admissions extends Controller
{
    public function index()
    {
        return view('main.admissions.index');
    }

    public function submitInquiry(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile_number' => 'required|regex:/^[0-9]{10}$/',
            'guardian_mobile_number' => 'nullable|regex:/^[0-9]{10}$/',
            'interested_course' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'scholarship_status' => 'required|in:scholarship,non-scholarship',
            // 'admission_budget' => 'required|numeric|min:0',
        ], [
            'name.required' => 'Please enter your full name',
            'mobile_number.required' => 'Please enter your mobile number',
            'mobile_number.regex' => 'Please enter a valid 10-digit mobile number',
            'mobile_number.unique' => 'This mobile number is already registered',
            'guardian_mobile_number.required' => 'Please enter guardian mobile number',
            'guardian_mobile_number.regex' => 'Please enter a valid 10-digit number',
            'interested_course.required' => 'Please select your interested course',
            'city.required' => 'Please enter your city',
            'state.required' => 'Please select your state',
            'scholarship_status.required' => 'Please select scholarship status',
            'admission_budget.required' => 'Please enter admission budget',
        ]);
        try {
            // Create new admission inquiry
            $inquiry = AdmissionInquiry::create([
                'name' => $validated['name'],
                'mobile_number' => $validated['mobile_number'],
                'guardian_mobile_number' => $validated['guardian_mobile_number'],
                'interested_course' => $validated['interested_course'],
                'city' => $validated['city'],
                'state' => $validated['state'],
                'scholarship_status' => $validated['scholarship_status'],
                // 'admission_budget' => $validated['admission_budget'],
                'status' => 'pending',
            ]);

            // TODO: Send notification email/SMS to admin and user
            // TODO: Send WhatsApp message confirmation

            return response()->json([
                'success' => true,
                'message' => 'Your application has been submitted successfully. We will contact you soon.',
                'data' => $inquiry,
            ], 201);
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Admission submission error: ' . $e->getMessage(), [
                'exception' => $e,
                'validated_data' => $validated,
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Error submitting your application. Please try again.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
