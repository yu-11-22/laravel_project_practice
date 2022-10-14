<?php

use Illuminate\Database\Seeder;

class ManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 本地化
        $faker = \Faker\Factory::create('zh_TW');
        $data = [];
        // 循環數據
        for ($i = 0; $i < 100; $i++) {
            // 獲取數據
            $data[] = [
                'username'      => \Faker\Factory::create('zh_CN')->userName,
                'password'      => bcrypt('123456'),
                'gender'        => rand(1, 3),
                'mobile'        => $faker->phoneNumber,
                'email'         => $faker->email,
                'role_id'       => rand(1, 6),
                'created_at'    => date('Y-m-d H:i:s', time()),
                'status'        => rand(1, 2),
            ];
        }
        // 寫入資料庫
        DB::table('manager')->insert($data);
    }
}
