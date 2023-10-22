<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'course' => [
                'required',
                'max:100',
                function ($name, $value, $fail) {
                    if ($value === 'PHP') {
                        $fail("O campo {$name} não pode possuir o valor {$value}");
                    }
                }
            ],
            'workload' => ['required', 'integer']
        ];
    }
}
