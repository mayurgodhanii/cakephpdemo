<?php

App::uses('CakeEmail', 'Network/Email');
App::uses('Component', 'Controller');

Class MailerComponent extends Component {

    public $components = array('Session', 'Email');

    public function sendMail($to, $subject, $from, $message, $attachments = null, $emailCofig = 'default', $emailtemplate = 'default', $formate = 'html', $replyto = null, $cc = null, $bcc = null) {
        if ($_SERVER['SERVER_NAME'] == "localhost") {
            $emailCofig = 'smtp';
        }
        $email = new CakeEmail();
        $email->config($emailCofig);
        $email->emailFormat($formate);
        $email->from(array($from));
        $email->to($to);
        $email->cc($cc);
        $email->bcc($bcc);
        $email->replyTo($replyto);
        $email->subject($subject);
        $email->theme('Default');
        //$email->template($emailtemplate);
        $email->addAttachments($attachments);
        if ($email->send($message)) {
            return true;
        } else {
            return false;
        }
    }

//    public function sendMail($to, $subject, $from, $message = null, $attachments = null, $emailCofig = null, $emailtemplate = null, $formate = null, $replyto = null, $cc = null, $bcc = null, $viewVar = NULL) {
//
//        ini_set('max_execution_time', 0);
//
//        $emailCofig = 'default';
//
//
//        if (empty($formate))
//            $formate = "html";
//        if (empty($from))
//            $from = Configure::read('FROM_EMAIL');
//
//        if (empty($replyto))
//            if ($from)
//                $replyto = $from;
//            else
//                $replyto = Configure::read('FROM_EMAIL');
//
//        if (empty($emailtemplate))
//            $emailtemplate = 'default';
//
//        $email = new CakeEmail();
//        $email->config($emailCofig);
//        $email->emailFormat($formate);
//        if ($from)
//            $email->from(array($from));
//        $email->to($to);
//        $email->replyTo($replyto);
//        $email->subject($subject);
//
//        if (!empty($cc))
//            $email->cc($cc);
//        if (!empty($bcc))
//            $email->bcc($bcc);
//
//
//        $email->template($emailtemplate);
//
//        if (!empty($viewVar))
//            $email->viewVars(array('viewVars' => $viewVar));
//
//        if (!empty($attachments)) {
//            $email->addAttachments($attachments);
//        }
//        if (!empty($message)) {
//            if ($email->send($message))
//                return true;
//        } else if ($email->send()) {
//            return true;
//        }
//        return false;
//    }
}
