<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserEditRequest extends FormRequest
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
//        return [
//            'name'=> 'required',
//            'email'=>'unique:users,email_address,'.$user->id,
//            'role'=>'required'
//        ];

        switch ($this->method()) {
            case 'POST':
                {
                    return [
                        'name' => 'required',
                        'email' => 'required|email|unique:users',
                        'password' => 'required'
                    ];
                }
            case 'PUT':
            case 'PATCH':
                {
                    return [
                    'name'=> 'required',
                    'email'=>'required|email'
                ];
        }
            default: break;
        }
    }
}
