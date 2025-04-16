<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User();
        $user1->name = 'Juanjo';
        $user1->email = 'juanjo@gmail.com';
        $user1->password = bcrypt('0012');
        $user1->rol = 'admin';
        $user1->save();

        $user2 = new User();
        $user2->name = 'Marc';
        $user2->email = 'marc@gmail.com';
        $user2->password = bcrypt('0012');
        $user2->rol = 'user';
        $user2->save();
    }
}
