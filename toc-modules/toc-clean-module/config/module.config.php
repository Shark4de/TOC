<?php

return [
    'view_manager' => [
        'template_map' => [
            'loadError' => __DIR__ . '/../view/loadError.phtml',
            'cleanModule/example' => __DIR__ . '/../view/clean-module/example.phtml',
        ],
        'template_path_stack' => [
            'application' => __DIR__ . '/../view',
        ],
    ],
    'cleanModule' => [
        // An array of features enabled/disabled for this module:
        'features' => [

        ],
        // An array of configuration values for this module:
        'configuration' => [

        ],
    ],
];