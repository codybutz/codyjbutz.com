<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        User::updateOrCreate(['email' => 'codyjbutz@gmail.com'], ['password' => bcrypt(env('ADMIN_PASS'))]);
    }
}
