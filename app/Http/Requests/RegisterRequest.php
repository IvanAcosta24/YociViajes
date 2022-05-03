<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|min:4|max:40|regex:/^[a-zA-Z0-9\sáéíóúñÁÉÍÓÚÑ\0-9\\._-]+$/',
            'last_name' => 'required|min:3|max:40|regex:/^[a-zA-Z0-9\sáéíóúñÁÉÍÓÚÑ\0-9\\._-]+$/',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ];
    }
}
