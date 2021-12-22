<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
          'name' => 'required  | ',
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'phone_number' => 'required | max:15',
          'roles' => 'CALON',
          'tgl_lahir'=> 'required',   
        //   'negara'=> 'required',       
          'district_id'=> 'required | integer ',
          'provinves_id'=> 'required | integer',
          'regency_id'=> 'required | integer', 
          'zip_code'=> 'required | integer',
          'alamat' => 'required | max:255', 
        ];
    }
}
