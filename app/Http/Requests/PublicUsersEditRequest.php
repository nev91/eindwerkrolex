<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicUsersEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'street'=>'required',
            'number'=>'required',
            'city'=>'required',
            'country'=>'required'
        ];
    }

    public function messages(){
        return[
            'name.required'=>'Naam is verplicht!',
            'street.required'=>'Straat is verplicht!',
            'number.required'=>'Huisnummer is verplicht!',
            'city.required'=>'Gemeente is verplicht!',
            'country.required'=>'Land is verplicht!',
        ];
    }
}
