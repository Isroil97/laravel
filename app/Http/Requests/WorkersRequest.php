<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           'name'   => 'required',
           'images' => 'required|file|image|mimes:png,jpg,jpeg,webp|max:5000',
           'info'   => 'required',
           'facebook' => 'nullable',
           'twitter' => 'nullable',
           'instagram' => 'nullable',
        ];
    }
}