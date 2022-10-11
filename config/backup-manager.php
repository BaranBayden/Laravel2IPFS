<?php

return [
    'local' => [
        'type' => 'Local',
        'root' => storage_path('app'),
    ],
    'ipfs' => [
        'type' => 'Web3Storage',
        'api-endp'    => env('https://api.web3.storage'),
        'name' => env('WEB3S_NAME'),
        'Token' => env('WEB3S_TOKEN'),
    ],
   

    // Add additional options to dump-command (like '--max-allowed-packet')
    'command-extra-params' => env('BACKUP_MANAGER_EXTRA_PARAMS'),
];
