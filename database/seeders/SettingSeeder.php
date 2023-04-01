<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            array(
                [
                    'set_header_contact_info' => '1',
                    'set_news_letter_subscription' => '1',
                    'set_credits_footer_info' => '1',
                ],
            )
        );
    }
}
