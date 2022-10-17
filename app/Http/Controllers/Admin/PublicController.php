<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

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
     * 驗證後台登入
     *
     * @return void
     */
    public function check(Request $request)
    {
        // 自動驗證
        if ($request->method() == 'POST') {
            $this->validate($request, [
                'username'             => 'required|min:2|max:20',
                'password'             => 'required|min:6',
                'g-recaptcha-response' => 'required|captcha',
            ]);
            // 要驗證的資料
            $data = $request->only(['username', 'password']);
            // 要求狀態為啟用
            $data['status'] = '2';
            // Auth 驗證身分
            // $request->get('online'), 勾選記住我會回傳 1, 相當於 true;
            $result = Auth::guard('admin')->attempt($data, $request->get('online'));
            if ($result) {
                return redirect('/admin/index/index');
            } else {
                // 會跳出錯誤訊息
                return redirect('/admin/public/login')->withErrors([
                    'loginError' => '帳號或密碼錯誤。'
                ]);
            }
        } else {
            return view('admin.public.login');
        }
    }

    /**
     * 後台登出跳轉
     *
     * @return void
     */
    public function logout()
    {
        // 登出清除 session
        Auth::guard('admin')->logout();
        // 跳轉登入頁
        return redirect('/admin/public/login');
    }
}
