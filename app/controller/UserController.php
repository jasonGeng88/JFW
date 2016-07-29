<?php

/**
 * Created by PhpStorm.
 * User: jason-geng
 * Date: 7/29/16
 * Time: 14:22
 */
namespace JFW\Controller;

use JFW\Model\User;
use JFW\Service\Mail;
use JFW\Service\Redis;
use JFW\Service\View;

class UserController extends BaseController
{
    public function home(){
        //redis
        Redis::set('key','value',5,'s');

        echo Redis::get('key');


        //mail
//        $this->mail = Mail::to(['xxx@qq.com'])
//
//            ->from('MotherFucker <xxxx@163.com>')
//
//            ->title('Fuck Me!')
//
//            ->content('<h1>Hello~~</h1>');

        //mail
//        $this->view = View::make('user')->with('user',User::first())
//
//            ->withTitle('MFFC :-D')
//
//            ->withFuckMe('OK!');
    }
}