<?php

namespace Database\Seeders;

use App\Models\Contact;
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
        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
        ]);

        Contact::create([
            'user_id' => 1,
            'phone_no' => 9999999999,
            'address' => 'Address test',
        ]);
    }
}
