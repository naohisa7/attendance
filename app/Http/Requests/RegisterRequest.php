<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() == '/register') {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:191',
            'email' => 'required|email|unique:users,email|string|max:191',
            'pass' => 'required|min:8|max:191',
            'pass_confirm' => 'required|same:pass',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.string' => '名前は文字形式で入力してください',
            'name.max:191' => '名前は191文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'email.unique:users' => 'このメールアドレスはすでに使用されています',
            'email.string' => 'メールアドレスは文字形式で入力してください',
            'email.max:191' => 'メールアドレスは191文字以下で入力してください',
            'pass.required' => 'パスワードを入力してください',
            'pass.min:8' => 'パスワードは8文字以上で入力してください',
            'pass.max:191' => 'パスワードは191文字以下で入力してください',
            'pass_confirm.required' => 'パスワードを入力してください',
            'pass_confirm.same' => 'パスワードが違います',
        ];
    }
}