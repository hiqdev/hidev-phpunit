<?php
/**
 * PHPUnit plugin for HiDev.
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\components;

/**
 * `phpunit.xml` config file.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class PhpunitXml extends \hidev\base\ConfigFile
{
    protected $_file = [
        'path'    => 'phpunit.xml.dist',
        'type'    => 'xml',
        'minimal' => '@hidev/phpunit/config/minimal.xml.dist',
    ];
}
