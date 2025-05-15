<?php

use Illuminate\Support\Facades\Route;
use XV4L3X\BackupInteroperator\Http\Controllers\BackupController;
use XV4L3X\BackupInteroperator\Http\Middleware\BasicAuth;

Route::middleware(BasicAuth::class)
    ->post(config('backup-interoperator.backup-path', '/backup'), BackupController::class);