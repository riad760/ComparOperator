<?php

class TourOperator {

    private $id;
    private $name;
    private $link;
    private $gradeCount;
    private $gradeTotal;
    private $isPremium;

    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }

  // Hydratation

    public function hydrate($donnees){
        foreach ($donnees as $key =>$value) {
        
            $method = 'set'.ucfirst($key);
        
        if (method_exists($this, $method))
        {
          $this->$method($value);
        }
        }
    }
 
// Getter Setter

    public function getId (){
        return $this->id;
    }

    public function setId ($id){
        $this->id = $id;
    }

    public function getName (){
        return $this->name;
    }

    public function setName  ($name){
        $this->name = $name;
    }

    public function getLink (){
        return $this->link;
    }

    public function setLink ($link){
        $this->link = $link;
    }

    public function getGrade (){
        return $this->gradeCount;
    }

    public function setGrade ($gradeCount){
        $this->gradeCount = $gradeCount;
    }

    public function getgradeTotal(){
        return $this->gradeTotal;
    }

    public function setgradeTotal($gradeTotal){
        return $this->gradeTotal = $gradeTotal;
    }

    public function isIsPremium (){
        return $this->isPremium;
    }

    public function setIs_premium ($isPremium){
        $this->isPremium = $isPremium;
    }
    
}
