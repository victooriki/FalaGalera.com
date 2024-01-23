<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateChamados extends FormRequest
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
        $rules = [
            'titulo' => [
                'required',
                'min:5',
                'max:255',
                'unique:chamados'
            ],
            'descricao' => [
                'required',
                'min:5',
                'max:1000'
            ],
            'email' => [
                'required',
                'min:5',
                'max:255'
            ],
        ];

        if ($this->method('PUT') || $this->method('PATCH')) {
            $rules['titulo'] = [
                'required',
                'min:5',
                'max:255',
                Rule::unique('chamados')->ignore($this->id ?? $this->chamado)
            ];
        }

        return $rules;
    }
}
