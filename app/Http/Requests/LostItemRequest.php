<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LostItemRequest extends FormRequest
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
            'item_name' => 'required|string|max:20',
            'location_found' => 'required|string|max:100',
            'item_description' => 'required|string|max:150',
            'date_lost' => 'required|date',
            'image' => 'required||nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'item_name.required' => 'Please provide item name.',
            'location_found.required' => 'Please provide a location.',
            'item_description.required' => 'Please provide a item description.',
            'date_lost.required' => 'Please specify the date.',
            'image.required' => 'Please provide a item image.',
        ];
    }
}