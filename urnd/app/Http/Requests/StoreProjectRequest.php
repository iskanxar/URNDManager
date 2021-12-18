<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pname' => [
                'required', 'string',
            ],
            'ptype' => [
                'required', 'string',
            ],
            'start_date' => [
                'required', 'date',
            ],
            'end_date' => [
                'required', 'date',
            ],
            'duration' => [
                'required', 'integer',
            ],
            'cost' => [
                'required', 'float',
            ],
            'progress' => [
                'required', 'string',
            ],
            'status' => [
                'required', 'string',
            ],
            'leader_id' => [
                'required', 'int',
            ],
        ];
    }
}
