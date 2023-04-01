<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('baseinfos')->insert(
            array(
                [
                    'bas_type' => 'siteUrl',
                    'bas_value' => 'https://',
                ],
                [
                    'bas_type' => 'genderType',
                    'bas_value' => 'male',
                ],
                [
                    'bas_type' => 'genderType',
                    'bas_value' => 'female',
                ],
                [
                    'bas_type' => 'memberType',
                    'bas_value' => 'normal',
                ],
            )
        );
    }
}
