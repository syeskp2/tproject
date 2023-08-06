<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Contactinformation;
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
        
        Contactinformation::create([
            'contact_id' => 1,
            'pincode' => 123456,
            'tel_no' => 9999999999,
            'near_by' => 'xyz place',
            'extra_detail' => 'More Information About Address',
        ]);
    }
}
