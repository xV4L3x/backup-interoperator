<?php

namespace XV4L3X\BackupInteroperator;

use Illuminate\Support\ServiceProvider;

class BackupInteroperatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/backup-interoperator.php', 'backup-interoperator');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/backup-interoperator.php' => config_path('backup-interoperator.php'),
        ], 'config');

        // Copia automatica del file di configurazione di Spatie (se non già presente)
        $spatieConfigPath = config_path('backup.php');
        if (!file_exists($spatieConfigPath)) {
            copy(__DIR__ . '/../stubs/backup.php', $spatieConfigPath);
        }

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}