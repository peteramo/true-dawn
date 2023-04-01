<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert(
            array(
                [
                    'pro_page_id' => '3',
                    'pro_name' => 'False Note',
                    'pro_image' => 'uploads/projects/latin_poster.jpg',
                    'pro_duration' => '',
                    'pro_director' => '',
                    'pro_writer' => '',
                    'pro_producer' => '',
                    'pro_details' => '',
                ],
            )
        );
    }
}
