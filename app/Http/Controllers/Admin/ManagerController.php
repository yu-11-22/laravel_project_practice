<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// 引入模型
use App\Admin\Manager;

class ManagerController extends Controller
{
    /**
     * 管理員列表頁面
     *
     * @return void
     */
    public function index()
    {
        if (isset($_GET['value'])) {
            $count = $_GET['value'];
        } else {
            $count = 10;
        }
        // 查詢數據
        $data = Manager::paginate($count);
        // 將數據放入視圖並展示
        return view('admin.manager.index', compact('data'));
    }
}
