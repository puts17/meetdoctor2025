<?php

namespace App\Http\Requests\Doctor;

use app\ManagementOperasional\Doctor;
// use gate
use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // create middleware from kernel at here

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
            'specialist_id' => [
                'required',
                'integer',
            ],
            'fee' => [
                'required',
                'string',
                'max:255',
            ],
            'photo' => [
                'nullable',
                'string',
                'max:100000',
            ],
        ];
    }
}
