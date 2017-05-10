<?php
/**
 * HiDev plugin for PHPUnit.
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\tests\unit\console;

use hidev\phpunit\console\PhpunitXmlController;

/**
 * Test for PhpunitXmlController.
 */
class PhpunitXmlControllerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var PhpunitXmlController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new PhpunitXmlController('phpunit.xml.dist', null);
    }

    protected function tearDown()
    {
    }

    public function testInit()
    {
    }
}
