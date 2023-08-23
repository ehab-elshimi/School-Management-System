<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date_format:Y-m-d',
            'dob' => 'required',
            'gender' => [
                'required',
                Rule::in(['male', 'female', 'other']),
            ],
            'phone_number' => 'required|string|max:15',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'gender.in' => 'Please select a valid gender.',
            'photo.image' => 'The photo must be an image.',
            'photo.mimes' => 'The photo must be in JPEG, PNG, or JPG format.',
            'photo.max' => 'The photo size must not exceed 2 MB.',
        ];
    }
    protected function prepareForValidation()
    {
        // Convert the "dob" field to a Carbon instance
        if ($this->has('dob')) {
            $this->merge([
                'dob' => Carbon::createFromFormat('d/m/Y', $this->input('dob'))->format('Y-m-d')
            ]);
        }
    }
    
}