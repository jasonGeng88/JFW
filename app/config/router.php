<?php
/**
 * Created by PhpStorm.
 * User: jason-geng
 * Date: 7/29/16
 * Time: 11:50
 */
use NoahBuscher\Macaw\Macaw;

Macaw::get('user', '\JFW\Controller\UserController@home');

Macaw::$error_callback = function() {

    throw new Exception("路由无匹配项 404 Not Found");

};

Macaw::dispatch();