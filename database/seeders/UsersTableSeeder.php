<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(51)->create();

        $user = User::find(51);
        $user->name = 'niuniu';
        $user->email = 'niuniu@example.com';
        $user->is_admin = true;
        $user->save();
    }
}
