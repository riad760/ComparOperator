<?php 

class Destination {

    
    protected $id;
    protected $location;
    protected $price;
    protected $id_tour_operator;


    // Le contructor

    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }

    // L'Hydratation

    public function hydrate($donnees){
        foreach ($donnees as $key =>$value) {
        
            $method = 'set'.ucfirst($key);
        
        if (method_exists($this, $method))
        {
          $this->$method($value);
        }
        }
    }

    // Les Getter et Setter

    public function getId (){
        return $this->id;
    }

    public function setId ($id){
        $this->id = $id;
    }


    public function getLocation (){
        return $this->location;
    }

    public function setLocation ($location){
        $this->location = $location;
    }

    public function getPrice (){
        return $this->price;
    }

    public function setPrice ($price){
        $this->price = $price;
    }

    public function getIdTourOperator (){
        return $this->id_tour_operator;
    }

    public function setId_tour_operator ($id_tour_operator){
        $this->id_tour_operator = $id_tour_operator;
    }

}