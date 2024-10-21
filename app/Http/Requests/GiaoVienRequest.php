<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GiaoVienRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ho_ten' => 'required|max:255',
            'ngay_sinh' => 'required|date',
            'gioi_tinh' => 'required|boolean',
            'sdt' => 'required|digits:10',
        ];
    }

    public function messages(): array
    {
        return [
            'ho_ten.required' => 'Họ tên là bắt buộc.',
        ];
    }
}
