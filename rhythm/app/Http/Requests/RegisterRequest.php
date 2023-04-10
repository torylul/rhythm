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
            'name' => ['required', 'alpha'],
            'surname' => ['required', 'alpha'],
            'email' => ['required', 'email', 'unique:users'],
            'number' => ['required', 'numeric', 'unique:users', 'regex:/\b\d{11}\b/'],
            'password' => ['required', 'regex:((?=.*\d)(?=.*[a-zA-Z])(?=.*[!?&#]).{8,})', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле ":attribute" обязательно для заполнения',
            'unique' => 'Поле ":attribute" должно быть уникальным',
            'regex' => 'Поле ":attribute" не соответсвует шаблону',
            'email' => 'Email должен быть валидным',
            'numeric' => 'Поле ":attribute" должно быть числовым',
            'confirmed' => 'Пароли не совпадают',
        ];
    }

    public function attributes() {
        return [
            'name' => "имя",
            'surname' => "фамилия",
            'number' => "телефон",
            'password' => "пароль"
        ];
    }
}
