<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MuseumRequest extends FormRequest
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
        'museum_name'=> 'required|min:2|max:255',
        'city'=> 'required'
      ];
    }

    public function messages()
    {
      return[
        'museum_name.required'=> 'Il nome è un campo obbligatorio',
        'museum_name.min'=>'Il nome deve avere almeno 2 caratteri',
        'museum_name.max'=>'Il nome deve avere massimo 255 caratteri',
        'city.required'=> 'La città è un campo obbligatorio'
      ];
    }
}
