<?php

namespace Laurel\FileManager\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laurel\FileManager\App\LaurelFM;
use Laurel\FileManager\App\Models\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function changeCurrentStorage(Request $request, int $id)
    {
        if (Storage::storageExists($id)) {
            Storage::setCurrentStorage($id);
            return true;
        } else {
            return abort(404);
        }
    }

    public function index()
    {

    }

    public function show(Request $request, int $id)
    {
        dd(LaurelFM::instance());
        try {
            $storage = Storage::findOrFail($id);
            $storageRepository = new $storage->class;
        } catch (\Exception $e) {
            return abort(404);
        }
    }
}
