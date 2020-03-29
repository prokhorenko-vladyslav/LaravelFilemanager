<?php

namespace Laurel\FileManager\Providers;

use Illuminate\Support\ServiceProvider;

class LaurelFileManagerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfig();
        $this->addPublished();
        $this->loadMigrationsFrom($this->getPackagePath() . '/database/migrations');
        $this->loadFactoriesFrom($this->getPackagePath() . '/database/factories');
//        $this->loadRoutesFrom($this->getPackagePath() . '/routes/api.php');
    }

    private function getPackagePath()
    {
        return __DIR__ . '/../..';
    }

    private function mergeConfig()
    {
        $this->mergeConfigFrom(
            $this->getPackagePath() . '/config/laurel_fm.php', 'laurel_fm'
        );
    }

    private function addPublished()
    {
        $this->publishes([
            $this->getPackagePath() . '/config/laurel_fm.php' => config_path('laurel_fm.php'),
        ]);
    }
}
