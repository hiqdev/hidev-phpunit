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
        'goals' => [
            'phpunit'          => 'hidev\phpunit\goals\PhpunitGoal',
            'phpunit.xml.dist' => 'hidev\phpunit\goals\PhpunitXmlGoal',
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
        'views' => [
            '@hidev/phpunit/views',
        ],
    ],
];
