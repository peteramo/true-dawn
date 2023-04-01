<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('static_pages')->insert(
            array(
                [
                    'sta_page_id' => '2',
                    'sta_body' => '',
                ],
                [
                    'sta_page_id' => '4',
                    'sta_body' => '',
                ],
            )
        );
    }
}
