<?php

namespace App\Http\Requests\Specialist;

use app\MasterData\Specialist;
// use gate
use Illuminate\Foundation\Http\FormRequest;

class StoreSpecialistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // create middleware from kernel at here
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
            'price' => [
                'required',
                'string',
                'max:255',
            ]
        ];
    }
}
