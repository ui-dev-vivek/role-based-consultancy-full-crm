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
            'mobile_number' => 'required|regex:/^[0-9]{10}$/|unique:admission_inquiries',
            'guardian_mobile_number' => 'required|regex:/^[0-9]{10}$/',
            'interested_course' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'scholarship_status' => 'required|in:scholarship,non-scholarship',
            'admission_budget' => 'required|numeric|min:0',
        ], [
            'name.required' => 'कृपया अपना नाम दर्ज करें',
            'mobile_number.required' => 'कृपया मोबाइल नंबर दर्ज करें',
            'mobile_number.regex' => 'कृपया एक वैध 10 अंकों का मोबाइल नंबर दर्ज करें',
            'mobile_number.unique' => 'यह मोबाइल नंबर पहले से पंजीकृत है',
            'guardian_mobile_number.required' => 'कृपया अभिभावक का मोबाइल नंबर दर्ज करें',
            'guardian_mobile_number.regex' => 'कृपया एक वैध 10 अंकों का नंबर दर्ज करें',
            'interested_course.required' => 'कृपया अपनी रुचि का कोर्स चुनें',
            'city.required' => 'कृपया शहर दर्ज करें',
            'state.required' => 'कृपया राज्य चुनें',
            'scholarship_status.required' => 'कृपया छात्रवृत्ति स्थिति चुनें',
            'admission_budget.required' => 'कृपया प्रवेश बजट दर्ज करें',
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
                'admission_budget' => $validated['admission_budget'],
                'status' => 'pending',
            ]);

            // TODO: Send notification email/SMS to admin and user
            // TODO: Send WhatsApp message confirmation

            return response()->json([
                'success' => true,
                'message' => 'आपका आवेदन सफलतापूर्वक जमा हो गया है। हम जल्द ही आपसे संपर्क करेंगे।',
                'data' => $inquiry,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'आवेदन जमा करने में त्रुटि हुई। कृपया पुनः प्रयास करें।',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
