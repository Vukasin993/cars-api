<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            "brand"=> "sometimes | required | string | min:2",
            "model"=>'sometimes | required | string | min:2',
            "year"=>'sometimes | required | integer | min:1990 | max: 2020',
            "isAutomatic"=>'sometimes | required | integer | min:0 | max: 1',
            "maxSpeed"=> 'sometimes | required | integer | min:20 | max: 300' ,
            "numberOfDoors"=> 'sometimes | required | integer | min:2 | max: 8',  
            "engine"=>'sometimes | required | string| in:' . implode(',', ['dizel', 'benzin', 'plin']),
        ];
    }
}
