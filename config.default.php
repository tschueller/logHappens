<?php

global $CORE_SETTINGS;

/**
 * Core settings, can be overridden by config.php
 */
$CORE_SETTINGS = (object) [
    // Allowed patterns for the log file (comma separated). Can also include parts of the path such as `/var/log/*.log`.
    'patterns' => '*.log',
    'header' => (object) [
        'title' => 'LogHappens',
        'links' => (object) [
            'show_configuration' => true,
            'show_settings' => true,
            'show_troubleshooting' => true,
            'show_github' => true
        ],
    ]
];

// If config.php exists, include it to override the default settings
if (file_exists(__DIR__ . '/config.php')) include_once __DIR__ . '/config.php';
