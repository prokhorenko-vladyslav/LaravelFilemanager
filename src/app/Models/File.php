<?php

namespace Laurel\FileManager\App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        "name", "file_type_id", "directory_id"
    ];
}
