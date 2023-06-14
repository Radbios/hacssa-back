<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required|min:3|max:255',
            'phone' => 'nullable|integer',
            'gender' => 'nullable',
            'last_purchase_date' => 'nullable',
            'total_purchase_amount' => 'nullable'
        ];

        if($this->method() === 'PUT' || $this->method() === 'PATCH'){
            $rules['name'] = 'nullable|min:3|max:255';
        }
        
        return $rules;
    }
}
