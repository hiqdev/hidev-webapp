<?php
/**
 * HiDev plugin for web applications
 *
 * @link      https://github.com/hiqdev/hidev-webapp
 * @package   hidev-webapp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\webapp\console;

/**
 * Controller for generating `src/config/defines.php` file.
 */
class DefinesController extends \hidev\controllers\FileController
{
    public $fileType = 'plain';

    public function actionLoad()
    {
        $this->setItems([
            'text' => $this->getFile()->load() ?: $this->getView()->render($this->template),
        ]);
    }

    public function actionSave()
    {
        $text = $this->getItem('text');
        foreach ($this->getWebApp()->getDefines() as $key => $value) {
            $value = var_export($value, true);
            $text = preg_replace("/^defined\('$key'\) or define\('$key',.*$/m", "defined('$key') or define('$key', $value);", $text);
        }
        $this->getFile()->save($text);
    }

    public function getWebApp()
    {
        return $this->takeGoal('webapp');
    }
}
