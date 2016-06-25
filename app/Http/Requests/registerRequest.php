<?php

namespace App\Http\Requests;

use Auth;
use App\Http\Requests\Request;

class registerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()) {
            return false;
        }

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
            'name'  => 'required',
            'email' => 'required|unique:users|max:100',
            'password' => 'required|confirmed|min:8'
        ];
    }
}
