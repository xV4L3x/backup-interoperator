<?php

return [
    "backup-path" => "/backup",
    "auth" => [
        "username" => env("BACKUP_INTEROPERATOR_USERNAME", "admin"),
        "password" => env("BACKUP_INTEROPERATOR_PASSWORD", "password")
    ]
];