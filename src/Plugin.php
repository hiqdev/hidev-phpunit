<?php

/*
 * PHPUnit plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'goals' => [
            'phpunit'          => 'hidev\codeception\goals\PhpunitGoal',
            'phpunit.xml.dist' => 'hidev\codeception\goals\PhpunitXmlGoal',
            'install'          => [
                'require' => [
                    'phpunit/phpunit' => '^4.8',
                ],
            ],
        ],
    ];
}
