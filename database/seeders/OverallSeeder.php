<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OverallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('overalls')->insert(
            array(
                [
                    'ove_company_name' => 'Truedawn Media',
                    'ove_site_url' => 'https://truedawn.com/',
                    'ove_brand_name' => 'Truedawn',
                    'ove_logo_path' => 'uploads/overall/logo.png',
                ],
            )
        );
    }
}
