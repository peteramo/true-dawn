<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert(
            array(
                [
                    'men_name' => 'Home',
                    'men_link' => ''
                ],
                [
                    'men_name' => 'Services',
                    'men_link' => 'services'
                ],
                [
                    'men_name' => 'Projects',
                    'men_link' => 'projects'
                ],
                [
                    'men_name' => 'About',
                    'men_link' => 'aboutus'
                ],
                [
                    'men_name' => 'Contact',
                    'men_link' => 'contactus'
                ],
            )
        );
    }
}
