<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;



class Reservation
{

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=50)
     */
    private $nom;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=50)
     */
    private $prenom;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @var int
     * @Assert\NotBlank() 
     * @Assert\Regex("/^[0-9]{10}$/")
     */
    private $telephone;

    // /**
    //  * @var string A "Y-m-d H:i:s" formatted value
    //  * @Assert\NotBlank() 
    //  * @Assert\Datetime
    //  * 
    //  */
    // private $date;

    // /**
    //  * @Assert\NotBlank() 
    //  * @Assert\Time
    //  * @var string A "H:i:s" Format attendu
    //  */
    // private $heure;

    /**
     * @Assert\Choice({"1", "2", "3", "4", "5", "+5"})
     */
    protected $convives;
    
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=2)
     */
    private $message;


    /**
     * Get the value of nom
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string  $nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }



    /**
     * Get the value of prenom
     *
     * @return  string
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param  string  $prenom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telephone
     *
     * @return  string
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @param  string  $telephone
     *
     * @return  self
     */ 
    public function setTelephone(string $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get a "D-m-y" Format attendu
     *
     * @return  string
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set a "D-m-y" Format attendu
     *
     * @param  string  $date  A "D-m-y" Format attendu
     *
     * @return  self
     */ 
    public function setDate(string $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get a "H:i:s" Format attendu
     *
     * @return  string
     */ 
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set a "H:i:s" Format attendu
     *
     * @param  string  $heure  A "H:i:s" Format attendu
     *
     * @return  self
     */ 
    public function setHeure(string $heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get the value of convives
     */ 
    public function getConvives()
    {
        return $this->convives;
    }

    /**
     * Set the value of convives
     *
     * @return  self
     */ 
    public function setConvives($convives)
    {
        $this->convives = $convives;

        return $this;
    }

    /**
     * Get the value of message
     *
     * @return  string
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @param  string  $message
     *
     * @return  self
     */ 
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }
}