<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserAdminRequest extends FormRequest
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
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $userId = $this->route()->parameter('user');
            $updation_rules = [
                'username' => ['required', Rule::unique('users','usr_user_name')->ignore($userId)],
                'password' => ['nullable', 'min:6', 'max:16'],
                'mobile' => ['nullable', Rule::unique('users','usr_mobile_phone')->ignore($userId)],
                'email' => ['nullable','email',Rule::unique('users','usr_email_address')->ignore($userId)],
                'status' => ['required'],
            ];
            return $updation_rules;
        }else{
            $creation_rules = [
                'username' => ['required'],
                'password' => ['required', 'min:6', 'max:16'],
                'mobile' => ['nullable'],
                'email' => ['nullable','email'],
                'status' => ['required'],
            ];
            return $creation_rules;
        }
    }
}
