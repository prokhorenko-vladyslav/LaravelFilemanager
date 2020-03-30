<?php

namespace Laurel\FileManager\Database\Seeds;

use Laurel\FileManager\App\Models\Storage;
use Laurel\FileManager\App\Storages\GoogleDriveStorage;
use Laurel\FileManager\App\Storages\LocalStorage;
use Illuminate\Database\Seeder;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Local storage
        */
        (new Storage([
            'name' => 'Local',
            'class' => LocalStorage::class,
            'disk_name' => 'local_storage',
        ]))->save();

        (new Storage([
            'name' => 'GoogleDrive',
            'class' => GoogleDriveStorage::class,
            'disk_name' => 'local_storage_2',
        ]))->save();
    }
}
