<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'dueDate' => 'required|date',
            'isCompleted' => 'required|boolean',
            'priority' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ];
    }

    /**
     * Get the custom validation messages.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Имя обязательно',
            'name.string' => 'Имя должно быть текстом',
            'name.max' => 'Максимально 255 символов',
            'description.string' => 'Описание должно быть текстом',
            'dueDate.required' => 'Срок выполнения обязателен',
            'dueDate.date' => 'Укажите корректную дату с временем в формате "Y-m-d H:i:s"',
            'isCompleted.required' => 'Статус задачи обязателен',
            'isCompleted.boolean' => 'Статус может быть только true или false',
            'priority.required' => 'Приоритет обязателен',
            'priority.string' => 'Приоритет должен быть текстом',
            'priority.max' => 'Максимально 255 символов',
            'category.required' => 'Категория обязательна',
            'category.string' => 'Категория должна быть текстом',
            'category.max' => 'Максимально 255 символов',
        ];
    }
}
