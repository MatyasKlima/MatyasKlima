<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of SignKlimaPresenter
 *
 * @author MATY-PC
 */
class SignklimaPresenter extends BasePresenter{
 
    public function renderDefault(){
    }
    
 public function createComponentSign($name) {
        return new \Sign($this, $name);
    }

    public function actionForgotPassword($email) {
        $emails = ['matyasklima1@seznam.cz'];
        foreach ($emails as $emailss) {
            $mail = new \Nette\Mail\Message();
            $mail->setFrom($email);
            $mail->addTo($emailss);
            $mail->setSubject('New Password');
            $mail->setBody('Your new password is ' . $password = rand(1,9));

            $mailer = new \Nette\Mail\SmtpMailer([ 'smtp' => true,'host' => 'smtp.seznam.cz',
                'username' => 'matyasklima1@seznam.cz',
                'password' => 'kralik12',
                'secure' => 'ssl']);
                $mailer->send($mail);
               } 
            $this->flashMessage('Message sent');
            $this->getPresenter()->redirect("Sign:Success");
        
    }
    
    
    
    public function actionSuccess(){
        $params = $this->getRequest();
        $this->template->params = $params->post;
    }
     public function createComponentRegisterMail($name) {
         return new RegisterMail($this,$name);
     }
    
}
