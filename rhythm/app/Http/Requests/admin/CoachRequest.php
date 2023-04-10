<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class CoachRequest extends FormRequest
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
            'name' => ['required', 'alpha', 'min: 3'],
            'surname' => ['required', 'alpha', 'min: 3'],
            'email' => ['required', 'email'],
            'description' => ['required', 'min: 5'],
        ];
    }

    public function messages()
    {
        return [
            'alpha' => 'Поле ":attribute" должно состоять из букв.',
            'required' => 'Поле ":attribute" обязательно для заполнения.',
            'min' => 'Минимальная длина поля ":attribute" : :min',
            'email' => 'Email должен быть валидным',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'имя',
            'surname' => 'фамилия',
            'email' => 'почта',
            'description' => 'описание',
        ];
    }
}
