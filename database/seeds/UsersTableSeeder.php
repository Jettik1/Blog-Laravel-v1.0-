<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin',
                'email'=> 'contrakt120@gmail.com',
                'password' => '12345678'
            ],
        ];
        DB::table('users')->insert($data);
    }
}
