<?php

namespace App\Http\Requests;

use App\Rules\AlphaSpace;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateUserProfile extends FormRequest
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
        $userId = Auth::id();
        return [
            'email' => [
                'required',
                Rule::unique('users')->ignore($userId),
                'email'
            ],
            'name' => [
                'required',
                'min:8',
                new AlphaSpace()
            ],
            'phone' => [
                'size:9'
            ]
        ];
    }
    public function messages() {
        return [
            // 'max' => 'Za duzo znaków wariacie'
        ];
    }
}
