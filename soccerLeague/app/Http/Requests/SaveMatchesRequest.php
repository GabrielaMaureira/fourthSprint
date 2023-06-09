<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveMatchesRequest extends FormRequest
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
            'local_team_id' => 'required|string',
            'visiting_team_id' => 'required|string',
            'match_date' => 'required',
            'local_goals' => 'required|number',
            'visiting_goals' => 'required|number',
        ];
    }
}
