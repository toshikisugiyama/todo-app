<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\CreateTask;

class EditTask extends CreateTask
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rule = parent::rules();
        return [

        ];
    }

    public function attributes()
    {
        $attributes = parent::attributes();
        return [

        ];
    }

    public function messages()
    {
        $messages = parent::messages();
        return [

        ];
    }
}
