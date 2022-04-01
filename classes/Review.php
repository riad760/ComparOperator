<?php

class Review {

    private $id;
    private $message;
    private $author;
    private $tourOperator;

    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }
    
        
// Hydratation de données 

    public function hydrate($donnees){
        foreach ($donnees as $key =>$value) {
        
            $method = 'set'.ucfirst($key);
        
        if (method_exists($this, $method))
        {
          $this->$method($value);
        }
        }
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        return $this->id = $id;
    }

    public function getMessage(){
        return $this->message;

    }

    public function setMessage($message){
        return $this->message = $message;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function setAuthor($author){
        return $this->author = $author;
    }

    public function gettourOperator(){
        return $this->tourOperator;
    }

    public function settourOperator($tourOperator){
        return $this->tourOperator = $tourOperator;
    }

    

}