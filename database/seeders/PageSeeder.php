<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert(
            array(
                [
                    'pag_uri' => '/',
                    'pag_name' => 'Homepage',
                    'pag_static' => '0',
                ],
                [
                    'pag_uri' => 'services',
                    'pag_name' => 'Services',
                    'pag_static' => '1',
                ],
                [
                    'pag_uri' => 'projects',
                    'pag_name' => 'Projects',
                    'pag_static' => '0',
                ],
                [
                    'pag_uri' => 'aboutus',
                    'pag_name' => 'About us',
                    'pag_static' => '1',
                ],
                [
                    'pag_uri' => 'contactus',
                    'pag_name' => 'Contact us',
                    'pag_static' => '0',
                ],
            )
        );
    }
}
