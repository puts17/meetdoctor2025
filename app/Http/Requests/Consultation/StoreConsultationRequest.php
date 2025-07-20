<?php

namespace App\Http\Requests\Consultation;

use app\MasterData\Consultation;
// use gate
use Illuminate\Foundation\Http\FormRequest;

class StoreConsultationRequest extends FormRequest
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
                'unique:consultation',
            ]
        ];
    }
}
