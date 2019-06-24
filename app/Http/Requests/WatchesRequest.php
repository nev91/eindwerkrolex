<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WatchesRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'description'=>'required',
            'slogan'=>'required',
            'price'=>'required',
            'category_id'=>'required',
        ];
    }
    public function messages(){
        return[
            'name.required'=>'Naam is verplicht!',
            'description.required'=>'Beschrijving is verplicht!',
            'slogan.required'=>'Slogan is verplicht!',
            'price.required'=>'Prijs is verplicht!',
            'category_id.required'=>'Categorie is verplicht!',
        ];
    }
}
