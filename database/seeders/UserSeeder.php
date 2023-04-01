<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('Godfather1');
        DB::table('users')->insert(
            array(
                [
                    'usr_user_name' => 'pouyavaghefi',
                    'usr_mobile_phone' => '09128347349',
                    'usr_password_hash' => $password,
                    'usr_email_address' => 'vagefipouya@yahoo.com',
                    'email_verified_at' =>  Carbon::now(),
                    'mobile_verified_at' => Carbon::now(),
                    'usr_is_admin' => '1',
                    'usr_is_main_admin' => '1',
                    'usr_is_active' => '1',
                    'usr_is_hidden' => '0',
                    'usr_str' => '8VRbbpPwwT',
                ],
                [
                    'usr_user_name' => 'demo',
                    'usr_mobile_phone' => '09120000000',
                    'usr_password_hash' => $password,
                    'usr_email_address' => 'email@gmail.com',
                    'email_verified_at' =>  Carbon::now(),
                    'mobile_verified_at' => Carbon::now(),
                    'usr_is_admin' => '1',
                    'usr_is_main_admin' => '1',
                    'usr_is_active' => '1',
                    'usr_is_hidden' => '0',
                    'usr_str' => '5UHfcxOeeM',
                ],
                [
                    'usr_user_name' => 'root',
                    'usr_mobile_phone' => '09121111111',
                    'usr_password_hash' => $password,
                    'usr_email_address' => 'email@yahoo.com',
                    'email_verified_at' =>  Carbon::now(),
                    'mobile_verified_at' => Carbon::now(),
                    'usr_is_admin' => '1',
                    'usr_is_main_admin' => '1',
                    'usr_is_active' => '1',
                    'usr_is_hidden' => '1',
                    'usr_str' => '2KQnkjJzaO',
                ],
            )
        );
    }
}
