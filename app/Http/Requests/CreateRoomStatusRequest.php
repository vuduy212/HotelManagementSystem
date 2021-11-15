<?php

namespace App\Http\Requests;

use App\Rules\StrLengthRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateRoomStatusRequest extends FormRequest
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
            'status' => 'required',
            'room_id' => 'required',
            'time' => ['required','date_format:"Y-m-d"',
                    Rule::unique('room_statuses')
                                    // ->ignore($this->user)
                                    ->where('room_id', $this->room_id)
            ]
        ];
    }
}
