<?php
/**
 * PHPUnit plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'controllerMap' =>  [
        'phpunit' => [
            'class' => \hidev\phpunit\console\PhpunitController::class,
        ],
        'phpunit.xml' => [
            'class' => \hidev\phpunit\console\PhpunitXmlController::class,
        ],
        'phpunit.xml.dist' => [
            'class' => \hidev\phpunit\console\PhpunitXmlController::class,
        ],
    ],
    'components' => [
        'phpunit' => [
            'class' => \hidev\phpunit\components\Phpunit::class,
        ],
        'phpunit.xml' => [
            'class' => \hidev\phpunit\components\PhpunitXml::class,
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@hidev/views' => ['@hidev/phpunit/views'],
                ],
            ],
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
    ],
];
