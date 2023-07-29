<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'min:4',
            'email' => 'email|unique:users,email,'.auth()->id(),
            'password' => 'min:6',
            'image' => 'image'
        ];
    }

    public function messages(): array
    {
        return [
            // Name
            'name.string' => 'O campo nome deve conter apenas letras.',
            'name.min' => 'O campo nome deve conter no mínimo :min caracteres.',

            // Email
            'email.email' => 'Insira um endereço de E-mail valido.',
            'email.unique' => 'Esse endereço de email já está cadastrado.',

            // Password
            'password.min' => 'Sua senha deve ter no mínimo :min caracteres.',

            // Image
            'image.image' => 'O arquivo precisa ser uma imagem.'
        ];
    }
}
