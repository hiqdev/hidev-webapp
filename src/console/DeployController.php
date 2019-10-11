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

use hidev\webapp\components\Deployer;

/**
 * Deploy Controller.
 * TODO REDO the whole thing to be configurable
 */
class DeployController extends \hidev\console\CommonController
{
    public function actionIndex($name = null, $command = 'all')
    {
        $deployer = new Deployer($name);

        return $deployer->call($command);
    }
}
