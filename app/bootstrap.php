<?php
/**
 * Created by PhpStorm.
 * User: jason-geng
 * Date: 7/29/16
 * Time: 16:02
 */

define('BASE_PATH', __DIR__);

use Illuminate\Database\Capsule\Manager as Capsule;

//Autoload
require BASE_PATH . '/../vendor/autoload.php';

//Eloquent ORM
$capsule = new Capsule();
$capsule->addConnection(require BASE_PATH . '/config/db.php');
$capsule->bootEloquent();

// whoops 错误提示

$whoops = new \Whoops\Run;

$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

$whoops->register();
