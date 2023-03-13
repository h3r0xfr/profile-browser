<?php

namespace App\Http\Requests;

use App\Models\Star;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StarUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'image' => 'required|string',
            'description' => 'required|string'
        ];
    }
}