<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
            'name' => 'required|string'
        ];
    }

    public function messages() : array {
        return [
            'email.required' => 'This field is required',
            'password.required' => 'This field is required',
            'name.required' => 'This field is required',
            'email.email' => 'This field is not a valid email address',
            'password.min' => 'Password must be at least 6 characters',
            'email.unique' => 'This email is already registered'
        ];
    }

}
