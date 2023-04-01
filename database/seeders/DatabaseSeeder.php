<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Overall;
use App\Models\Pages\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BaseSeeder::class,
            UserSeeder::class,
            PageSeeder::class,
            HomeSeeder::class,
            MetaSeeder::class,
            ProjectSeeder::class,
            MenuSeeder::class,
            OverallSeeder::class,
            StaticSeeder::class,
            ConnSeeder::class,
            SettingSeeder::class,
            FooterSeeder::class,
            NotSeeder::class
        ]);
    }
}
