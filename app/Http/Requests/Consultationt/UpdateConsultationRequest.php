<?php

namespace App\Http\Requests\Consultationt;

use App\Models\MasterData\Consultationt;
// use Gate; 
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

// rule hanya ada di update request 
use illuminate\Validation\Rule;

class UpdateConsultationRequest extends FormRequest
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
                'required', 'string', 'max:255', Rule::unique('consultation')->ignore($this->consultation),
        ]
        ];
    }
}
