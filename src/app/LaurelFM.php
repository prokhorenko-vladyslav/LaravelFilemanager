<?php


namespace Laurel\FileManager\App;

use Laurel\Hooks\Traits\Hookable;

class LaurelFM
{
    use Hookable;

    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (!self::$instance)
            self::$instance = new self;

        return self::$instance;
    }

    public static function routes()
    {
        require __DIR__ . "/../routes/api.php";
    }
}
