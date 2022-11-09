<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBikerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fullname' => ['required'],
            'idcard' => ['required'],
            'gender' => ['required'],
            'birthday' => ['required'],
            'registrationplate' => ['required'],
            'brand' => ['required'],
            'color' => ['required'],
        ];
    }
}
