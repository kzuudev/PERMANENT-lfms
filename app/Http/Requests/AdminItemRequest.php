<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Assuming the user should be an admin to access this request
        return auth()->user() && auth()->user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'item_name' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'image_url' => 'nullable|url',
            'student_name' => 'required|string|max:255',
            'location_found' => 'required|string|max:255',
            'date_reported' => 'required|date',
            'image_url' => 'required||nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'posted_by' => 'nullable|string|max:255',
        ];
    }
}

