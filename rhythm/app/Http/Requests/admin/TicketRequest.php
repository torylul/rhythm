<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            'name' => ['required', 'min: 3'],
            'price' => ['required', 'numeric'],
            'count' => ['required', 'numeric'],
            'description' => ['required', 'min: 5'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле ":attribute" обязательно для заполнения.',
            'numeric' => 'Необходимо ввести числовое значение.',
            'min' => 'Минимальная длина поля ":attribute" : :min',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'наименование',
            'price' => 'цена',
            'stock' => 'количество дней',
            'description' => 'описание',
        ];
    }
}
