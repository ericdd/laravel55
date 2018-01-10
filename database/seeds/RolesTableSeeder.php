<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $user = new App\Role;
        $user->name = '超级管理员';
		$user->perm_id = '';
        $user->save();
    }
}