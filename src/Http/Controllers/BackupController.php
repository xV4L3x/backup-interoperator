<?php

namespace XV4L3X\BackupInteroperator\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;

class BackupController extends Controller {
    public function __invoke() {
        Artisan::call('backup:run');
        return response()->json(['status' => 'backup-started']);
    }
}