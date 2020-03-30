<?php

namespace Laurel\FileManager\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laurel\FileManager\App\LaurelFM;

class Storage extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'icon', 'is_remote', 'remote_address', 'class', 'disk_name'];
    protected $dates = ['deleted_at'];
    protected $casts = ['is_remote' => 'bool'];

    public static function findById($id) : self
    {
        return self::findOrFail($id);
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

    public function getDiskName()
    {
        return $this->disk_name;
    }

    public function isDeleted() : bool
    {
        return $this->{$this->getDeletedAtColumn()} !== null;
    }
}
