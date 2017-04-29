<?php
/**
 * PHPUnit plugin for HiDev.
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\console;

use hidev\base\File;
use hidev\handlers\BaseHandler;
use Yii;

/**
 * PHPunit.
 */
class PhpunitController extends \hidev\base\Controller
{
    protected $_before = ['phpunit.xml.dist'];

    public $force;

    public function getComponent()
    {
        return $this->take('phpunit');
    }

    /**
     * Generates `tests/_bootstrap.php` and runs tests.
     */
    public function actionIndex()
    {
        $this->getComponent()->touchBootstrap();

        return $this->doRun();
    }

    protected function doRun()
    {
        $args = $this->getComponent()->prepareArgs();

        return $this->passthru('phpunit', $args);
    }

    /**
     * Generates skeleton class for fake.
     */
    public function actionGenfake($file)
    {
        $path = $this->buildFakePath($file);
        if (!$this->force && file_exists($path)) {
            Yii::warning("already exists: $path");
            return 1;
        }

        return $this->genFake($file, $path);
    }

    protected function genFake($file, $path)
    {
        $text = $this->getView()->render('phpunit/fake.twig', [
            'class'         => $this->buildClass($file),
            'namespace'     => $this->buildTestNamespace(),
            'name'          => $file,
        ]);
        BaseHandler::write($path, $text);
    }

    /**
     * Generates skeleton class for test.
     */
    public function actionGentest($file)
    {
        $path = $this->buildTestPath($file);
        if (!$this->force && file_exists($path)) {
            Yii::warning("already exists: $path");
            return 1;
        }

        return $this->genSkel($file);
    }

    protected static function prepareFile($file)
    {
        return substr($file, -4) === '.php' ? substr($file, 0, -4) : $file;
    }

    protected function genSkel($file)
    {
        $destPath = $this->buildTestPath($file);
        $dir = dirname($destPath);
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        return $this->passthru('phpunit-skelgen', [
            'generate-test', '--bootstrap', 'tests/_bootstrap.php', '--',
            $this->buildClass($file), $this->buildPath($file), $this->buildTestClass($file), $destPath,
        ]);
    }

    protected function buildNamespace($dir = '')
    {
        return $this->take('package')->namespace . ($dir ? '\\' . strtr($dir, '/', '\\') : '');
    }

    protected function buildTestNamespace($dir = 'tests\\unit')
    {
        return $this->buildNamespace($dir);
    }

    protected function buildClass($file, $dir = '', $postfix = '')
    {
        return $this->buildNamespace($dir) . '\\' . strtr(static::prepareFile($file), '/', '\\') . $postfix;
    }

    protected function buildTestClass($file, $dir = 'tests\\unit', $postfix = 'Test')
    {
        return $this->buildClass($file, $dir, $postfix);
    }

    protected function buildPath($file, $dir = 'src', $prefix = '', $postfix = '')
    {
        return $dir . DIRECTORY_SEPARATOR . $prefix . static::prepareFile($file) . $postfix . '.php';

        //## XXX getting absolute path, think if needed
        //return strncmp($path, '/', 1) === 0 ? $path : Yii::getAlias("@root/$path");
    }

    protected function buildTestPath($file, $dir = 'tests/unit', $prefix = '', $postfix = 'Test')
    {
        return $this->buildPath($file, $dir, $prefix, $postfix);
    }

    protected function buildFakePath($file, $dir = 'tests/unit', $prefix = 'Fake', $postfix = '')
    {
        return $this->buildPath($file, $dir, $prefix, $postfix);
    }
}
