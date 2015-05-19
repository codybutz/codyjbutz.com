<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        User::updateOrCreate(['email' => env('ADMIN_EMAIL')], ['password' => bcrypt(env('ADMIN_PASS'))]);
    }
}
