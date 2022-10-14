<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    /**
     * 後台登入頁面
     *
     * @return void
     */
    public function login()
    {
        return view('admin.public.login');
    }

    /**
     * 自動驗證後台登入
     *
     * @return void
     */
    public function check(Request $request)
    {
        $this->validate($request, [
            'username'             => 'required|min:2|max:20',
            'password'             => 'required|min:6',
            'g-recaptcha-response' => 'required|captcha',
        ]);
    }
}
