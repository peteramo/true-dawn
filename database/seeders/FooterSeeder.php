<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert(
            array(
                [
                    'foo_name_1' => 'Home',
                    'foo_link_1' => 'http://google.com/',
                    'foo_name_2' => 'About us',
                    'foo_link_2' => 'http://google.com/',
                    'foo_name_3' => 'Services',
                    'foo_link_3' => 'http://google.com/',
                    'foo_name_4' => 'Terms of service',
                    'foo_link_4' => 'http://google.com/',
                    'foo_name_5' => 'Privacy policy',
                    'foo_link_5' => 'http://google.com/',
                ],
            )
        );
    }
}
