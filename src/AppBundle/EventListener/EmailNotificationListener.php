<?php

namespace AppBundle\EventListener;

/**
 * EmailNotificationListener
 */
abstract class EmailNotificationListener {
    protected $mailer;
    protected $twig;
    protected $fromEmail;

    public function setMailer(\Swift_Mailer $mailer) {
        $this->mailer = $mailer;
    }

    public function setTwig($twig) {
        $this->twig = $twig;
    }

    public function setFromEmail($fromEmail) {
        $this->fromEmail = $fromEmail;
    }

    protected function sendEmailMessage($templateName, $context, $toEmail)
    {
        $context = $this->twig->mergeGlobals($context);
        $template = $this->twig->loadTemplate($templateName);
        $subject = $template->renderBlock('subject', $context);
        $textBody = $template->renderBlock('body_text', $context);
        $htmlBody = $template->renderBlock('body_html', $context);

        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom(array($this->fromEmail => 'WeLocum'))
            ->setTo($toEmail);
        if (!empty($htmlBody)) {
            $message->setBody($htmlBody, 'text/html')
                ->addPart($textBody, 'text/plain');
        } else {
            $message->setBody($textBody);
        }

        $this->mailer->send($message);
    }
}
