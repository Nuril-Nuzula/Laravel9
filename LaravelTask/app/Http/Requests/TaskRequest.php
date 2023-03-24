<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaskRequest extends FormRequest
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
        $rule_task_unique = Rule::unique('tasks', 'tasks');
        if ($this->method() !== 'POST'){
            $rule_task_unique->ignore($this->route()->parameter('id'));
        }

        return [
            'time' => ['required'],
            'task' => ['required',$rule_task_unique]
        ];
    }
    public function messages()
    {
        return[
            'required' => 'isian :attribute harus di isi',
            'time.required' => 'waktu harus diisi'
        ];
    }
}