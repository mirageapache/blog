<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
{
    /*
    |--------------------------------------------------------------------------
    | 使用者註冊-資料驗證規則
    |--------------------------------------------------------------------------
    */

    // 驗證規則
    public function rules(){
        return [
            'account' => 'required|unique:users,user_account|max:30',
            'user_name' => 'required|unique:users,user_name|between:3,20',
            'password' => 'required|max:20',
            'confirm_password' => 'required',
            // 'confirm_password' => 'required|confirmed:password', #1100807_不知道為什麼比對後兩個會錯
            'email' => 'required|unique:users,email|email'
        ];
    }

    // 驗證欄位
    public function attributes(){
        return[
            'accountaccount' => '帳號',
            'user_name' => '暱稱',
            'password' => '密碼',
            'confirm_password' => '確認密碼',
            'email' => '電子郵件'
        ];
    }

    // 錯誤訊息
    public function messages(){
        return[
            'account.required' => ':attribute欄位必填！',
            'account.unique' => '這個:attribute已經有人使用囉！',
            'account.max' => ':attribute不能超過30個字喔！',
            'user_name.required' => ':attribute欄位必填！',
            'user_name.unique' => '這個:attribute已經有人使用囉！',
            'user_name.between' => ':attribute須要3~20個字喔！',
            'password.required' => ':attribute欄位必填！',
            'password.max' => ':attribute不能超過20個字喔！',
            'confirm_password.required' => ':attribute欄位必填！',
            // 'confirm_password.confirmed' => ':attribute與密碼不相符喔！',
            'email.required' => ':attribute欄位必填！',
            'email.unique' => '這個:attribute已經有人使用囉！',
            'email.email' => '這不是email格式喔！'
        ];
    }


}
