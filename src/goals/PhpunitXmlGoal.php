<?php

/*
 * PHPUnit plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\goals;

/**
 * Goal for phpunit.xml.dist config file.
 *
 * For the moment done with template.
 * TODO redo with xml loading/saving.
 */
class PhpunitXmlGoal extends \hidev\goals\FileGoal
{
    protected $_file = [
        'type'    => 'xml',
        'minimal' => '@hidev/phpunit/minimal.xml.dist',
    ];
}
