<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'customer_fullname' => ['required'],
            'customer_phone' => ['required'],
            'parcel_type' => ['required'],
            'parcel_weight' => ['required'],
            'parcel_size' => ['required'],
            'source_name' => ['required'],
            'source_phone' => ['required'],
            'source_address' => ['required'],
            'destination_name' => ['required'],
            'destination_phone' => ['required'],
            'destination_address' => ['required'],
            'date_pickup' => ['required'],
            'date_deliver' => ['required'],
            'amount' => ['required'],
            'pay_type' => ['required'],
            'biker_id' => ['required'],
            'doctype_id' => ['required'],
        ];
    }
}
