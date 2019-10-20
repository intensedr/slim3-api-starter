<?php

$config = [
	'settings' => [
		'displayErrorDetails' => getenv('APP_DEBUG') === 'true',
		'app' => [
			'title' => getenv('APP_NAME')
		],
        'database' => [
            'mysql' => [
                'driver' => getenv('DB_DRIVER'),
                'host' => getenv('DB_HOST'),
                'port' => getenv('DB_PORT'),
                'database' => getenv('DB_NAME'),
                'username' => getenv('DB_USERNAME'),
                'password' => getenv('DB_PASSWORD'),
                'charset' => getenv('DB_CHARSET'),
                'collation' => getenv('DB_COLLATION'),
                'prefix' => getenv('DB_PREFIX')
            ]
        ]
	]
];