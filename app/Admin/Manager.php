<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
// 引入 trait
use Illuminate\Auth\Authenticatable;

class Manager extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    // 定義模型關聯的數據表(一個模型只對應一個表，必填)
    protected $table = 'manager';
    // 使用 trait, 相當於將整個 trait 代碼複製過來這
    // use \Illuminate\Auth\Authenticatable;
    use Authenticatable;
}
