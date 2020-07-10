<?php
/**
 * HiDev plugin for PHPUnit
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2018, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\components;

/**
 * `phpunit.xml` config file.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class PhpunitXml extends \hidev\components\File
{
    protected $_file = [
        'path'    => 'phpunit.xml.dist',
        'type'    => 'xml',
        'minimal' => __DIR__ . '/../../config/minimal.xml.dist',
    ];
}
