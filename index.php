<?php
/**
 * Created by PhpStorm.
 * User: jason-geng
 * Date: 7/29/16
 * Time: 11:48
 */

define('PUBLIC_PATH', __DIR__);

//load bootstrap
require PUBLIC_PATH . '/app/bootstrap.php';

//route config
require PUBLIC_PATH . '/app/config/router.php';