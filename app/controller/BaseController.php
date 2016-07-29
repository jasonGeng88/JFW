<?php
/**
 * Created by PhpStorm.
 * User: jason-geng
 * Date: 7/29/16
 * Time: 14:21
 */
namespace JFW\Controller;

use JFW\Service\Mail;
use JFW\Service\View;
use Nette\Mail\SmtpMailer;

class BaseController
{
    protected $view;
    protected $mail;

    /**
     * BaseController constructor.
     */
    public function __construct()
    {
    }

    public function __destruct()
    {
        $view = $this->view;
        if ($view instanceof View) {
            extract($view->data);
            require $view->view;
        }

        $mail = $this->mail;
        if ($mail instanceof Mail) {
            $mailer = new SmtpMailer($mail->config);
            $mailer->send($mail);
        }
    }
}