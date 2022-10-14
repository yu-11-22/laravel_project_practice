<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager', function (Blueprint $table) {
            // 主鍵
            $table->increments('id');
            // 用戶名 varchar20
            $table->string('username', 20)->notNull();
            // 密碼 varchar255
            $table->string('password')->notNull();
            // 1 男, 2 女, 3 保密
            $table->enum('gender', [1, 2, 3])->notNull()->default(1);
            // 手機號碼 varchar14
            $table->string('mobile', 14);
            // 信箱 varchar50
            $table->string('email', 50);
            // 角色表中的主鍵
            $table->tinyInteger('role_id');
            // 時間戳
            $table->timestamps();
            // 記住登入帳密
            $table->rememberToken();
            // 1 禁用, 2 啟用
            $table->enum('status', [1, 2])->notNull()->default(2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manager');
    }
}
