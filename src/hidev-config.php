<?php

/*
 * PHPUnit plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' =>  [
        'config' => [
            'phpunit' => [
                'class' => 'hidev\phpunit\controllers\PhpunitController',
            ],
            'phpunit.xml.dist' => [
                'class' => 'hidev\phpunit\controllers\PhpunitConfigController',
            ],
            'binaries' => [
                'phpunit' => [
                    'package'  => 'phpunit/phpunit',
                    'version'  => '^4.8',
                    'download' => 'https://phar.phpunit.de/phpunit-old.phar',
                ],
                'phpunit-skelgen' => [
                    'package'  => 'phpunit/phpunit-skeleton-generator',
                    'version'  => '^2.0',
                    'download' => 'https://phar.phpunit.de/phpunit-skelgen.phar',
                ],
            ],
            'views' => [
                '@hidev/phpunit/views',
            ],
        ],
    ],
];
