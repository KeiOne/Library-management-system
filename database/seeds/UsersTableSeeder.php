<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = \App\Role::where('slug', 'admin')->first();
        $staff_role = \App\Role::where('slug', 'staff')->first();
        $patron_role = \App\Role::where('slug', 'patron')->first();

        $admin = User::firstOrNew([
            'first_name' => "Mahdi",
            'last_name' => "Mahmoodian",
            'national_code' => "1234567890",
            'phone' => "22334455",
            'mobile' => "09199069657",
            'address' => "Tehran, Tehran",
            'postal_code' => "12345",
            'email' => "mahmoodian.m1999@gmail.com",
            'password' => Hash::make("123456"),
        ]);
        $admin->save();
        $admin->roles()->save($admin_role);

        $staff1 = User::firstOrNew([
            'first_name' => "Danial",
            'last_name' => "Moradi",
            'national_code' => "1234567890",
            'phone' => "22334455",
            'mobile' => "09199069657",
            'address' => "Tehran, Tehran",
            'postal_code' => "12345",
            'email' => "dan.ms@gmail.com",
            'password' => Hash::make("123456"),
        ]);
        $staff1->save();
        $staff1->roles()->save($staff_role);

        $staff2 = User::firstOrNew([
            'first_name' => "Keivan",
            'last_name' => "Dehghan",
            'national_code' => "1234567890",
            'phone' => "22334455",
            'mobile' => "09199069657",
            'address' => "Tehran, Tehran",
            'postal_code' => "12345",
            'email' => "k1.dhg@gmail.com",
            'password' => Hash::make("123456"),
        ]);
        $staff2->save();
        $staff2->roles()->save($staff_role);

        $patron = User::firstOrNew([
            'first_name' => "Sarah",
            'last_name' => "Firouz Abadi",
            'national_code' => "1234567890",
            'phone' => "22334455",
            'mobile' => "09199069657",
            'address' => "Tehran, Tehran",
            'postal_code' => "12345",
            'email' => "firouz.abadi@gmail.com",
            'password' => Hash::make("123123"),
        ]);
        $patron->save();
        $patron->roles()->save($patron_role);
    }
}
