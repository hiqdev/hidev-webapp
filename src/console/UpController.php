<?php
/**
 * Automation tool mixed with code generator for easier continuous development
 *
 * @link      https://github.com/hiqdev/hidev
 * @package   hidev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2018, HiQDev (http://hiqdev.com/)
 */

namespace hidev\webapp\console;

use hidev\webapp\components\Up;

/**
 * Up Controller.
 * TODO REDO the whole thing to be configurable
 */
class UpController extends \hidev\console\CommonController
{
    public function actionIndex($name = null, $command = 'all')
    {
        $up = new Up($name);

        return $up->call($command);
    }
}
