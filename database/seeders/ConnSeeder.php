<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert(
            array(
                [
                    'con_page_id' => '5',
                    'con_email' => 'mail@truedawnmedia.com',
                    'con_email2' => '',
                    'con_phone' => '',
                    'con_phone2' => '',
                    'con_mobile' => '',
                    'con_fax' => '',
                    'con_address' => '',
                    'con_postcode' => '',
                    'con_twitter' => '',
                    'con_facebook' => '',
                    'con_instagram' => '',
                    'con_skype' => '',
                    'con_linkedin' => '',
                ],
            )
        );
    }
}
