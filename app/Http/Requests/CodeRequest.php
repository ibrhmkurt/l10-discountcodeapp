<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CodeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $used_code_id = $this->request->get("id");
        return [
            "used_code" => "required|min:7|max:7|unique:App\Models\Campaign,used_code,$used_code_id"
        ];

    }

        public function messages()
    {
        return [
            "used_code.required" => "Lütfen indirim kodunuzu giriniz.",
            "used_code.min" => "Lütfen 7 karakterli indirim kodunuzu giriniz.",
            "used_code.max" => "Lütfen 7 karakterli indirim kodunuzu giriniz.",
            "used_code.unique" => "Girmiş olduğunuz indirim kodu daha önce kullanıldı."
        ];
    }
}
