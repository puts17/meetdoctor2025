<?php

namespace App\Http\Requests\User;

use app\Models\User;
// use gate
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

// this rule only at update request
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
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
            //
            'name' => [
                'required',
                'string',
                'max:255',   
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($this->user), // ignore current user
                // Rule unique only works for other record id
            ],

            'password' => [
                'min:8',
                'string',
                'max:255',
            ]
        ];
    }
}
