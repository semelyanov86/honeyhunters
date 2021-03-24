<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email:rfc,dns',
            'comment' => 'required|min:10|max:500'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
