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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => "Alkaid",
            'isAdmin' => True,
            'address' => "Jalan batu rusa 5",
            'phone' => "08123456789",
            'email' => "admin@gmail.com",
            'password' => bcrypt("1234567"),
            'Card_Number'=>"null"
        ]);
        User::create([
            'name' => "User",
            'isAdmin' => false,
            'address' => "Jalan batu rubi 2",
            'phone' => "08123456789",
            'email' => "user@gmail.com",
            'password' => bcrypt("1234567"),
            'Card_Number'=>"2143658709214365"
        ]);
    }
}
