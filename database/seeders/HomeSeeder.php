<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homepages')->insert(
            array(
                [
                    'hom_page_id' => '1',
                    'hom_hero_background_uri' => '',
                    'hom_hero_header' => 'WELCOME TO DAY',
                    'hom_hero_paragraph' => 'We are team of talented designers making websites with Bootstrap',
                    'hom_hero_button_name' => 'GET STARTED',
                    'hom_hero_button_action_uri' => 'GET STARTED',
                ],
            )
        );
    }
}
