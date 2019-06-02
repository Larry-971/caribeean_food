<?php

namespace App\Notification;

use Twig\Environment;
use App\Entity\Contact;

class ContactNotification{

    /**
     * @var \Swift_Mailer
     */ 
    private $mailer;

    /**
     * @var /Environment
     */ 
    private $renderer;

    public function __construct(\Swift_Mailer $mailer, Environment $renderer){
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }

    //Methode qui permet d'envoyer l'email
    public function notify(Contact $contact){
        $message = (new \Swift_Message('Caribeean Food'))
        ->setFrom($contact->getEmail())
        ->setTo('lilsty971@caribeeanfood.fr')
        ->setReplayTo($contact->getEmail())
        ->setBody($this->renderer->renderer('emails/contact.html.twg', ["contact" => $contact]), "text/html");
        $this->mailer->send($message);
    }



    
}