<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
            "brand"=> "required | string",
            "model"=>'required | string',
            "year"=>'required | integer | min:1990 | max: 2020',
            "isAutomatic"=>'required | integer | min:0 | max: 1',
            "maxSpeed"=> 'required | integer | min:100 | max: 350' ,
            "numberOfDoors"=> 'required | integer | min:2 | max: 8',  
            "engine"=>'required | string| in:' . implode(',', ['dizel', 'benzin', 'plin']),
            ];
    }
}
