<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
            'valor' => 'required',
            'unidade' => 'required',
            'data_hora' => 'required'
        ];
    }

    public function messages(){
    return [
         'valor.required' => 'valor obrigatorio',
         'unidade.required' => 'valor obrigatorio',
         'data_hora.required' => 'valor obrigatorio',
    ];
} 
}
