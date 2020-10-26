<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreScheduleRequest extends FormRequest
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
            'title' => 'required',
            'date' => 'required',
            'from_time' => 'required',
            'to_time' => 'required',
            'user_id' => 'required',
            'meet_url' => 'required',
            'location' => 'required',
            'description' => 'required'
        ];
    }


    public function validationData()
    {
        $this->merge([
            'date' => '2020-10-26 14:50:58'
        ]);
        return $this->all();
    }
}
