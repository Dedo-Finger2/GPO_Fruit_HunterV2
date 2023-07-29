<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class StoreUserFormRequest extends FormRequest
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
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:users,email',
            'emailConfirm' => 'same:email',
            'password' => 'required|min:6',
            'passwordConfirm' => 'same:password',
            'image' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            // Name
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve conter apenas letras.',
            'name.min' => 'O campo nome deve conter no mínimo :min caracteres.',

            // Email
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Insira um endereço de E-mail valido.',
            'email.unique' => 'Esse endereço de email já está cadastrado.',
            'emailConfirm.same' => 'Ambos campos de email devem ser iguais.',

            // Password
            'password.required' => 'O campo de senha é obrigatório.',
            'password.min' => 'Sua senha deve ter no mínimo :min caracteres.',
            'passwordConfirm.same' => 'Os dois campos de senha devem ser iguais.',

            // Image
            'image.required' => 'O arquivo precisa ser uma imagem.'
        ];
    }
}
