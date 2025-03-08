<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'title.required'=>'Il titolo è obbligatorio',
           'title.min'=>'Il titolo richiede più di 3 caratteri',
           'director.required'=>'Il regista è obbligatorio',
           'year.required'=>'Il campo anno è obbligatorio',
           'year.numeric'=>'Il campo anno deve essere numerico',
           'plot.required'=>'La trama è obbligatoria',
           'plot.min'=>'La trama deve essere almeno 5 caratteri',
           'img.required'=>'L|immagine è obbligatoria',
           'img.image'=>'Il file deve essere di tipo immagine'
        ];
    }
}
