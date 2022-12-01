<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGestionnaireRequestActivite extends FormRequest
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
            'nom' => ['required', 'max:100'],
            'description' => ['required', 'max:500'],
            'taille' => ['required'],
        ];
    }//fin rules

    public function messages()
    {
        return [
            'nom.required' => 'Il faut spécifier un nom',
            'nom.max' => 'Le nom ne doit pas contenir plus de 100 caractères',
            'description.required' => 'Il faut spécifier une description',
            'taille.required' => 'Il faut spécifier une taille',
            ];
    }//fin messages

    


}//fin class
