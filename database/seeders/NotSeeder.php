<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->insert(
            array(
                [
                    'not_body' => 'Welcome to Admin area, this Admin panel was made by Laravel 9. Have fun with it...',
                ],
            )
        );
    }
}
