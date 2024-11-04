<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicsRequest extends FormRequest
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
            "name" => "required|string|min:2|max:255",
            "description" => "required|string|min:2",
            "image_url" => "required|url",
            "price" => "required|numeric",
            "series" => "required|string|min:2|max:255",
            "sale_date" => "required|date",
            "type" => "required|string|min:2|max:255"
        ];
    }

    public function messages(){
        return [
            "name.required" => "Il nome è obbligatorio",
            "name.min" => "Il nome deve essere composto da almeno 2 caratteri",
            "description.required" => "La descrizione è obbligatoria",
            "description.min" => "La descrizione deve essere più lunga di 2 caratteri",
            "image_url.required" => "Bisogna inserire un url valido per l'immagine",
            "price.required" => "Il prezzo è obbligatorio indicarlo",
            "price.numeric" => "Il prezzo deve essere indicato solo da numeri",
            "series.required" => "La serie è obbligatoria",
            "sale_date.required" => "La data di vendita è obbligatoria",
            "sale_date.date" => "La data deve essere inserita nel formato giusto",
            "type.required" => "Il tipo è obbligatorio",
        ];
    }
}
