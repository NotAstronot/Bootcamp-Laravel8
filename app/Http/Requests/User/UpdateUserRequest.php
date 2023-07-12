<?php

namespace App\Http\Requests\User;

use App\Models\user;
// use Gate; 
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

// rule hanya ada di update request 
use illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // create middleware dari kernel disini 
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
            'name' => [
                'required', 'string', 'max:255',
            ],
            'email' => [
                'required', 'email','max:255', Rule::unique('users')->ignore($this->user),
                // Rule unique hanya bekerja untuk other record id 
            ],
            'password' => [
                'min:8', 'string', 'max: 55', 'mixedCase',
            ],
            // ada validasi untuk role disini
        ];
    }
}
