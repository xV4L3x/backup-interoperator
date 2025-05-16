## Introduction
This is a proprietary package that is built to simplify MY backup process, it is here on packagist for convenience.
Do not use it if you don't know what you are doing.

## Requirements
It's essential to have the command `mysqldump` installed on the deployment machine as this package uses it to create the database dump.

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

The config file provides default credentials for the authentication of the backup request, if you want to change them,
you have to define the `BACKUP_INTEROPERATOR_USERNAME` and `BACKUP_INTEROPERATOR_PASSWORD` environment variables in your `.env` file.

## Configuration
If you are using a remote s3 disk for your backups, just se the right credentials in the `.env` file:
```dotenv
AWS_ACCESS_KEY_ID=username
AWS_SECRET_ACCESS_KEY=password
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=bucket-name
AWS_ENDPOINT=endpoint-address
AWS_USE_PATH_STYLE_ENDPOINT=true
```

To point the laravel backups to the s3 disk then you should edit the `config/backup.php` file and set the `destination.disks` to `s3`:
```php
'backup' => [
    'destination' => [
        'disks' => [
            's3'
        ]
    ]
]
```

If you don't want to back up all the source code and you only mind about the storage folder you can change the content of the `config/backup.php` file to:
```php
'source' => [
    'files' => [
        'include' => [
            storage_path(), // storage/ only
        ],
        'exclude' => [],   // nothing to exclude
        'follow_links' => false,
    ],
    'databases' => [
        'mysql',
    ],
]
```