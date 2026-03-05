<?php
// config/firebase.php
return [
    'default' => env('FIREBASE_DEFAULT_PROJECT', 'default'),

    'projects' => [
        'default' => [
            'credentials' => base_path('storage/app/firebase_credentials.json'),
            'database' => [
                'url' => 'https://diplommm-5d205-default-rtdb.europe-west1.firebasedatabase.app/'  // ← ТВОЙ URL!
            ]
        ],

    ],
];
