<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateBillRequest extends FormRequest
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
            'product_id'        => 'required|unique:products,product_id,'. $this->id,
            'product_name'      => "required|regex:/^[a-zA-Z]+$/u|max:255",
            'available_stocks'  => "required",
            'product_price'     => "required",
            'tax_percentage'    => "required",
        ];
    }

    public function messages()
    {
        return [
            'product_id.required'       => 'Product ID is required.',
            'product_id.unique'         => 'Product ID has already been taken.',
            'product_name.required'     => 'Product Name is required.',
            'product_name.regex'        => 'Product Name format is invalid.',
            'available_stocks.required' => 'Available Stocks is required.',
            'product_price.required'    => 'Product Price is required.',
            'tax_percentage.required'   => 'Tax Percentage is required.'
        ];
    }
}
