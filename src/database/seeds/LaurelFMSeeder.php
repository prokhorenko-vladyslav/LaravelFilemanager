<?php

namespace Laurel\FileManager\Database\Seeds;

use Illuminate\Database\Seeder;

class LaurelFMSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(StorageSeeder::class);
    }
}
