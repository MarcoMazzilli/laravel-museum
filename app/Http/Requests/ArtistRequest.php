<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistRequest extends FormRequest
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
            'artist_name'=> 'required|min:2|max:50',
            'artist_lastname'=> 'required|min:2|max:50',
            'category'=> 'required',
            'alive'=> 'required',
        ];
    }

    public function messages()
    {
        return[
            'artist_name.required'=> 'Il nome è un campo obbligatorio',
            'artist_name.min'=>'Il nome deve avere almeno 2 caratteri',
            'artist_name.max'=>'Il nome deve avere massimo 50 caratteri',
            'artist_lastname.required'=>'Il cognome è un campo obbligatorio',
            'artist_lastname.min'=>'Il cognome deve avere almeno 2 caratteri',
            'artist_lastname.max'=>'Il cognome deve avere massimo 50 caratteri',
            'category.required'=> 'La categoria è un campo obbligatorio',
            'alive.required'=> 'Questo è un campo obbligatorio',
        ];
    }
}
