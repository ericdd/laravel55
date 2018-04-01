<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = new App\Models\User;
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = '123456';
		$user->role_id = '1';
        $user->save();
    }
}