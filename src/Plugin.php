<?php

/*
 * PHPUnit plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'goals' => [
            'phpunit'          => 'hidev\phpunit\goals\PhpunitGoal',
            'phpunit.xml.dist' => 'hidev\phpunit\goals\PhpunitXmlGoal',
            'install'          => [
                'require' => [
                    'phpunit/phpunit'                    => '^4.8',
                    'phpunit/phpunit-skeleton-generator' => '*',
                ],
                'bin' => [
                    'phpunit'           => 'phpunit/phpunit',
                    'phpunit-skelgen'   => 'phpunit/phpunit-skeleton-generator',
                ],
            ],
        ],
        'views' => [
            '@hidev/phpunit/views',
        ],
    ];
}
