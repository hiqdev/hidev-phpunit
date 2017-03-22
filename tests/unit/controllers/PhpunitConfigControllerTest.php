<?php
/**
 * PHPUnit plugin for HiDev.
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\tests\unit\controllers;

use hidev\phpunit\controllers\PhpunitConfigController;

/**
 * Test for PhpunitConfigController.
 */
class PhpunitConfigControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PhpunitConfigController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new PhpunitConfigController('phpunit.xml.dist', null);
    }

    protected function tearDown()
    {
    }

    public function testInit()
    {
        $this->assertSame('xml', $this->object->file->type);
    }
}
