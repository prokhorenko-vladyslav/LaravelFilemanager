<?php

namespace Laurel\FileManager\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laurel\FileManager\App\LaurelFM;
use Laurel\FileManager\App\Models\Directory;
use Laurel\FileManager\App\Models\File;
use Laurel\FileManager\App\Models\FileType;
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

    public function index(Request $request)
    {
        //TODO add indexing method
        $this->indexDirectory($request->get('path', '/'));
        return response()->json([
            "directories" => LaurelFM::instance()->getCurrentStorage()->directories()->paginate(10),
        ]);
    }

    public function show(Request $request)
    {

    }

    private function indexDirectory($route)
    {
        $files = LaurelFM::instance()->getDiskInstance()->files($route);
        foreach ($files as $fileItem) {

            $file = new File;
//            $extension = $fileItem->
//            $fileType = FileType::where('')
            $file->fill([
                "name" => $fileItem
//                "fileTypeId" => FileType::findOrCreate()
            ]);
        }
    }
}
