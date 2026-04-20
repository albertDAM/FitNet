<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MacrosRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'peso' => 'required|numeric',
            'altura' => 'required|numeric',
            'edad' => 'required|numeric',
            'sexo' => 'required|in:hombre,mujer',
            'actividad' => 'required|in:sedentario,ligero,moderado,fuerte,muyfuerte',
            'objetivo' => 'required|in:perder,ganar,mantenimiento',
        ];
    }
}
