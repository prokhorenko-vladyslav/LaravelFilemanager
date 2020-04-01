<?php

namespace Laurel\FileManager\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laurel\FileManager\App\LaurelFM;
use Laurel\FileManager\App\Models\Directory;
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

    public function show(Request $request, int $id, string $route = "./")
    {
        //TODO add indexing method
        return response()->json([
           "directories" => LaurelFM::instance()->getCurrentStorage()->directories()->paginate(10),
        ]);
    }
}
