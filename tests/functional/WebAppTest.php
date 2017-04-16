<?php
/**
 * HiDev plugin for Yii2 web applications
 *
 * @link      https://github.com/hiqdev/hidev-webapp
 * @package   hidev-webapp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\webapp\tests\functional;

use hidev\tests\functional\Tester;

class HiSiteTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \FunctionalTester
     */
    protected $tester;

    protected function setUp()
    {
        $this->tester = new Tester($this);
        $this->tester->clean = true;
    }

    protected function tearDown()
    {
        $this->tester = null;
    }

    public function testMinimal()
    {
        $this->tester->config(__DIR__ . '/minimal/.hidev/config.yml');
        $this->tester->hidev('webapp');
        $this->tester->assertFiles(__DIR__ . '/minimal', ['src', 'web']);
    }
}
