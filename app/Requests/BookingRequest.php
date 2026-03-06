<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BookingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'type' => 'required|in:tour,assessment,virtual',
            'appointment_date' => 'required|date|after_or_equal:today',
            'appointment_time' => 'required|string',
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:20',
            'relationship' => 'required|in:spouse,child,sibling,other-relative,friend,self,professional',
            'resident_name' => 'nullable|string|max:100',
            'attendees' => 'required|integer|min:1|max:5',
            'special_requests' => 'nullable|string|max:1000',
        ];
    }
    
    public function messages()
    {
        return [
            'appointment_date.after_or_equal' => 'Please select a future date.',
            'attendees.max' => 'Maximum of 5 attendees allowed per tour.',
        ];
    }

    public function prepareForValidation()
    {
        // Format phone number if needed
        if ($this->has('phone')) {
            $this->merge([
                'phone' => preg_replace('/[^0-9]/', '', $this->phone)
            ]);
        }
    }
}
