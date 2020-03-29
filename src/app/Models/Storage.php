<?php

namespace Laurel\FileManager\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Storage extends Model
{
    use SoftDeletes;

    private static $currentStorage = null;
    protected $fillable = ['name', 'icon', 'is_remote', 'remote_address', 'class'];
    protected $dates = ['deleted_at'];
    protected $casts = ['is_remote' => 'bool'];

    public static function setCurrentStorage(int $id)
    {
        self::$currentStorage = $id;
        session()->put('storage_id', $id);
    }

    public static function getCurrentStorage()
    {
        return self::$currentStorage;
    }

    public static function storageExists($id = null)
    {
        return self::where('id', $id ?? self::getCurrentStorage())->exists();
    }

    public static function findById($id = null)
    {
        return self::where('id', $id ?? self::getCurrentStorage())->firstOrFail();
    }

    public function getIcon() : string
    {
        return $this->icon;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function isRemote() : bool
    {
        return (bool)$this->is_remote;
    }

    public function getRemoteHostAddress() : string
    {
        return (bool)$this->remote_address;
    }

    public function isDeleted() : bool
    {
        return $this->{$this->getDeletedAtColumn()} !== null;
    }
}
