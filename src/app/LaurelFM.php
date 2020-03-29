<?php


namespace Laurel\FileManager\App;

use Laurel\FileManager\App\Models\Storage;
use Laurel\Hooks\Traits\Hookable;

class LaurelFM
{
    use Hookable;

    private static $instance;
    private $storage;

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
        return $this;
    }

    public function getCurrentStorage()
    {
        return $this->storage;
    }
}
