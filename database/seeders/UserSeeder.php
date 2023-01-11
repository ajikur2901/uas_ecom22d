<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "admin";
        $user->email = 'admin@student.mercubuana-yogya.ac.id';
        $user->password = bcrypt('12345678');
        $user->phone = "081331101575";
        $user->alamat = "Godean";
        $user->role = "admin";
        $user->status = "aktif";
        $user->save();

        $user = new User();
        $user->name = "user";
        $user->email = 'user@student.mercubuana-yogya.ac.id';
        $user->password = bcrypt('12345678');
        $user->phone = "081331101575";
        $user->alamat = "Godean";
        $user->role = "member";
        $user->status = "aktif";
        $user->save();
    }
}
