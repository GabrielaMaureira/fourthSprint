<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveTeamRequest extends FormRequest
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
            'name' => 'required|alpha|max:70',
            'description' => 'required|alpha|max:500',
            'image' => 'required|mimes:jpeg,jpg,png|dimensions:min_width=100,min_height=100|max:2048'
        ];
       
    }
}
