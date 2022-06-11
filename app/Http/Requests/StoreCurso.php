<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [

            'nombre_apellido' => 'required|max:75',
            'edad' => 'required|integer',

        ];
    }
    public function attributes()
    {
        return [
            'nombre_apellido' => 'Nombre y apellido obligatorio si o si',
        ];
    }

    public function messages()
    {
        # code...
        return [
            'edad.required' => 'la edad la put madr',
        ];
    }
}
