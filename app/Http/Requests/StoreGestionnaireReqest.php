<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGestionnaireReqest extends FormRequest
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
            'prenom' => ['required', 'max:100'],
            'date' => ['required', 'max:10']
        ];
    }//fin rules

    public function messages()
    {
        return [
            'nom.required' => 'Il faut spécifier un nom',
            'nom.max' => 'Le nom ne doit pas contenir plus de 100 caractères',
            'prenom.required' => 'Il faut spécifier un prénom',
            'prenom.max' => 'Le prénom ne doit pas contenir plus de 100 caractères',
            'date.required' => 'Il faut spécifier une date'
            ];
    }//fin messages

    


}//fin class
