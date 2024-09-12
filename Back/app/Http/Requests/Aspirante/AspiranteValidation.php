<?php

namespace App\Http\Requests\Aspirante;

use Illuminate\Foundation\Http\FormRequest;

class AspiranteValidation extends FormRequest
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
            
                'DNI' => 'required|integer',
                'nombre' => 'required|string|max:20',
                'apellido' => 'required|string|max:20',
                'email' => 'required|email|max:50',
                'telefono' => 'required|string|max:20',
                'genero' => 'required|string|max:10',
                'fecha_nac' => 'required|date',
                'nacionalidad' => 'required|string|max:20',
                'direccion' => 'required|string|max:30',
                'id_localidad' => 'required|integer|exists:localidad,id_localidad',
          
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'email.required' => 'El correo electrónico es obligatorio.',
    //         'email.email' => 'Ingresa una dirección de correo electrónico válida.',
    //         'email.regex' => 'El correo electrónico ingresado no respeta el formato correcto.',
    //         'password.required' => 'La contraseña es obligatoria.',
    //         'password.regex' => 'La contraseña debe tener al menos 8 caracteres, una letra mayúscula, minúscula y un número.',

    //     ];
    // }
}
