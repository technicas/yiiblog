<?php

// change the following paths if necessary
$yiit=dirname(__FILE__).'/../../../../../../../../Users/pyxyzn/yii-1.1.14/framework/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
