<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sistemas extends FormRequest
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
            'nome_sistema'=>'required|min:1|max:255',
            'informativo_sistema'=>'required|min1|max:255',
            'responsavel_sistema'=>'require|min:1|max:255'
        ];
    }
}
