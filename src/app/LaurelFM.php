<?php


namespace Laurel\FileManager\App;

use Illuminate\Contracts\Filesystem\Filesystem;
use Laurel\FileManager\App\Models\Storage;
use \Illuminate\Support\Facades\Storage as StorageFacade;
use Laurel\Hooks\Traits\Hookable;

class LaurelFM
{
    use Hookable;

    private static $instance;
    private $storage;
    private $diskInstance;

    private function __construct()
    {

    }

    public static function instance()
    {
        if (!self::$instance)
            self::$instance = new self;

        return self::$instance;
    }

    public static function routes()
    {
        require __DIR__ . "/../routes/api.php";
    }

    public function setCurrentStorage(int $id)
    {
        $this->storage = Storage::findById($id);
        session()->put('storage_id', $id);
        if (!$this->getCurrentStorage()->isRemote() && !StorageFacade::exists($this->getCurrentStorage()->getDiskName())) {
            StorageFacade::makeDirectory($this->getCurrentStorage()->getDiskName());
        }

        return $this;
    }

    public function getCurrentStorage() : Storage
    {
        return $this->storage;
    }

    public function getDiskInstance() : Filesystem
    {
        if (!$this->diskInstance)
            $this->diskInstance = StorageFacade::disk($this->getCurrentStorage()->getDiskName());

        return $this->diskInstance;
    }

    public function getDiskConfig()
    {
        return config('filesystems.disks.' . $this->getCurrentStorage()->getDiskName());
    }
}
