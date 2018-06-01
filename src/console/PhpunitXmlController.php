<?php
/**
 * HiDev plugin for PHPUnit
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2018, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\console;

/**
 * `phpunit.xml` generation.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class PhpunitXmlController extends \hidev\base\Controller
{
    public function actionIndex()
    {
        $this->take('phpunit.xml')->save();
    }
}
