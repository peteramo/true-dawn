<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metas')->insert(
            array(
                [
                    'met_page_id' => '1',
                    'met_title' => 'Homepage',
                    'met_description' => '',
                    'met_keywords' => '',
                ],
                [
                    'met_page_id' => '2',
                    'met_title' => 'Services',
                    'met_description' => '',
                    'met_keywords' => '',
                ],
                [
                    'met_page_id' => '3',
                    'met_title' => 'Projects',
                    'met_description' => '',
                    'met_keywords' => '',
                ],
                [
                    'met_page_id' => '4',
                    'met_title' => 'About us',
                    'met_description' => '',
                    'met_keywords' => '',
                ],
                [
                    'met_page_id' => '5',
                    'met_title' => 'Contact us',
                    'met_description' => '',
                    'met_keywords' => '',
                ],
            )
        );
    }
}
