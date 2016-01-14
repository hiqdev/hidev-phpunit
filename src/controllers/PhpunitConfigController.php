<?php

/*
 * PHPUnit plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\controllers;

/**
 * Goal for phpunit.xml.dist config file.
 */
class PhpunitConfigController extends \hidev\controllers\FileController
{
    protected $_file = [
        'path'    => 'phpunit.xml.dist',
        'type'    => 'xml',
        'minimal' => '@hidev/phpunit/minimal.xml.dist',
    ];
}
