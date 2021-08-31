<?php

namespace App\Http\Requests;

use App\Models\Test;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTestRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('test_edit');
    }

    protected function rules(): array
    {
        return [
            'test.b' => [
                'string',
                'required',
                'unique:tests,b,' . $this->test->id,
            ],
            'test.date' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
        ];
    }
}
