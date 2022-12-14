<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 首頁頁面
     *
     * @return void
     */
    public function welcome()
    {
        return view('/admin.index.welcome');
    }
}
