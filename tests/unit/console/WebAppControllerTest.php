<?php
/**
 * HiDev plugin for Yii2 web applications
 *
 * @link      https://github.com/hiqdev/hidev-webapp
 * @package   hidev-webapp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017-2018, HiQDev (http://hiqdev.com/)
 */

namespace hidev\webapp\tests\unit\console;

use hidev\webapp\console\WebAppController;

class WebAppControllerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var WebAppController
     */
    protected $controller;

    protected function setUp(): void
    {
        $this->controller = new WebAppController('test', null);
    }

    protected function tearDown(): void
    {
    }

    public function testConstruct()
    {
        $this->assertInstanceOf(WebAppController::class, $this->controller);
    }
}
