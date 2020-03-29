<?php
    use Illuminate\Support\Facades\Route;

    Route::prefix('laurel_fm')->namespace('\Laurel\FileManager\App\Http\Controllers')->middleware(\Laurel\FileManager\App\Http\Middleware\Header::class)->group(function () {
        Route::get('storage/current/{id}', 'StorageController@changeCurrentStorage');

        Route::middleware(\Laurel\FileManager\App\Http\Middleware\StorageMiddleware::class)->group(function () {
            Route::resource('storage', 'StorageController');
            Route::get('directory/chmod/{accessRights}', 'DirectoryController@chmod');
            Route::resource('directory', 'DirectoryController');
            Route::get('directory/chmod/{accessRights}', 'FileController@chmod');
            Route::resource('file', 'FileController');
            Route::resource('file_type', 'FileTypeController');
            Route::resource('activity', 'ActivityController');
        });
    });
