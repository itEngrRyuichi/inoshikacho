<?php

namespace Database\Seeders;

use App\Models\Area;
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
            UsersTableSeeder::class,
            StoreTypesTableSeeder::class,
            AreaTableSeeder::class,
            PersonTypesTableSeeder::class,
            AmenityTableSeeder::class,
            StoresTableSeeder::class,
            StoreImagesTableSeeder::class,
            RoomsTableSeeder::class,
            PlansTableSeeder::class,
            ProvidesTableSeeder::class,
        ]);
    }
}
