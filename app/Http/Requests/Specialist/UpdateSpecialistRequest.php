<?php

namespace App\Http\Requests\Specialist;

use App\Models\MasterData\Specialist;
// use Gate; 
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;


// rule hanya ada di update request 
use illuminate\Validation\Rule;

class UpdateSpecialistRequest extends FormRequest
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
            'name' => [
                'required', 'string', 'max:255', Rule::unique('specialist')->ignore($this->specialist),
            ],
            'price' => [
                'required', 'string', 'max:255', 
            ]
        ];
    }
}
