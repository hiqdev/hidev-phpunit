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
    'controllerMap' => [
        'phpunit' => [
            'class' => 'hidev\phpunit\controllers\PhpunitController',
            'deps'  => 'phpunit-config',
        ],
        'phpunit-config' => [
            'class' => 'hidev\phpunit\controllers\PhpunitConfigController',
        ],
        'phpunit.xml.dist' => [
            'class' => 'hidev\phpunit\controllers\PhpunitConfigController',
        ],
    ],
    'components' =>  [
        'config' => [
            'views' => [
                '@hidev/phpunit/views',
            ],
            'binaries' => [
                'phpunit' => [
                    'package' => 'phpunit/phpunit',
                    'version' => '^4.8',
                ],
                'phpunit-skelgen' => [
                    'package' => 'phpunit/phpunit-skeleton-generator',
                    'version' => '*',
                ],
            ],
        ],
    ],
];
