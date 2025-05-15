## Introduction
This is a proprietary package that is built to simplify MY backup process, it is here on packagist for convenience.
Do not use it if you don't know what you are doing.

## Installation
The installation is easy, remind that this package depends on `spatie/laravel-backup` package, it will be installed automatically
```bash
composer require xv4l3x/backup-interoperator
```

## Usage
If you didn't publish the `spatie/laravel-backup` config file, you can do it with the command:
```bash
php artisan vendor:publish --provider="Spatie\Backup\BackupServiceProvider"
```

Then you can publish the config file of this package with the command:
```bash
php artisan vendor:publish --provider="Xv4l3x\BackupInteroperator\BackupInteroperatorServiceProvider"
```