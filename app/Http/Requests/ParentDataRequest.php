<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ParentDataRequest extends FormRequest
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
            //parent
            'address' => 'required|string', // Add address validation
            'national_id_num' => 'required|numeric|digits:14|unique:parent_data,national_id_num',
            'national_id_face' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'national_id_background' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            //user
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirmation_password' => 'required|same:password', // Ensure confirmation matches password
            'fname' => 'required|string',
            'lname' => 'required|string',
            'gender' => 'required|in:male,female',
            'dob' => 'required|date',
            'photo' => 'required|image',
            'phone' => 'required|string',
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
            // parent
            'address.required' => 'Please provide an address.',
            'national_id_num.required' => 'Please provide The National ID number.',
            'national_id_num.numeric' => 'National ID number must be numeric.',
            'national_id_num.digits' => 'National ID number must be 14 digits.',
            'national_id_num.unique' => 'This national ID number is already in use.',
            'national_id_face.required' => 'Please provide a face image of the National ID .',
            'national_id_face.image' => 'Please upload a valid image file.',
            'national_id_face.mimes' => 'Invalid image format for National ID face.',
            'national_id_face.max' => 'Image size exceeds maximum allowed.',
            'national_id_background.required' => 'Please provide a background image of the National ID.',
            'national_id_background.image' => 'Please upload a valid image file.',
            'national_id_background.mimes' => 'Invalid image format for National ID background.',
            'national_id_background.max' => 'Image size exceeds maximum allowed.',
            // user
            'email.required' => 'Please provide an email address.',
            'email.email' => 'Please provide a valid email address.',
            'password.required' => 'Please provide a password.',
            'password.min' => 'Password must be at least 8 characters.',
            'confirmation_password.required' => 'Please confirm your password.',
            'confirmation_password.same' => 'Confirmation password does not match the password.',
            'fname.required' => 'Please provide a first name.',
            'lname.required' => 'Please provide a last name.',
            'gender.required' => 'Please select a gender.',
            'gender.in' => 'Invalid gender selection.',
            'dob.required' => 'Please provide a date of birth.',
            'dob.date' => 'Invalid date of birth format.',
            'photo.required' => 'Please provide a photo.',
            'photo.image' => 'Please upload an image file.',
            'phone.required' => 'Please provide a phone number.',
        ];
    }
    
    // protected function prepareForValidation()
    // {
    //     // Convert the "dob" field to a Carbon instance
    //     if ($this->has('dob')) {
    //         $this->merge([
    //             'dob' => Carbon::createFromFormat('d/m/Y', $this->input('dob'))->format('Y-m-d')
    //         ]);
    //     }
    // }
    
}