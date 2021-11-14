<?php

namespace App\Http\Requests;

use App\Rules\StrLengthRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomCategoryRequest extends FormRequest
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
            'category_name' => [
                'required',
                'alpha_dash',
                new StrLengthRule()
            ],
            'description' => 'required|min:6|max:255',
            'price' => 'numeric|min:100|max:999',
        ];
    }
}
