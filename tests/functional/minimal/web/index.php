<?php

require __DIR__ . '/../src/config/defines.php';
require __DIR__ . '/../src/config/bootstrap.php';

$config = require __DIR__ . '/../src/config/web.php';

(new yii\web\Application($config))->run();
