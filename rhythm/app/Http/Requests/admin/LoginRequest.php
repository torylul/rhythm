<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|exists:admins',
            'password' => 'required',
        ];
    }

    public function messages() {
        return [
            'required' => '":attribute" обязателен для заполнения.',
            'exists' => 'Пользователя с такой почтой не существует.',
        ];
    }

    public function attributes() {
        return [
            'password' => "пароль",
        ];
    }
}
