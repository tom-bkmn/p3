<?php

class ProfileGenerator {

    // Properties
    private $firstName;
    private $lastName;
    private $gender = "female";
    public $profile;

    //Constructor
    function __construct($first, $last, $_gender) {
        $this->firstName = $first;
        $this->lastName = $last;
        $this->gender = $_gender;
    }

    // Methods  
    // The Sets - named for what they do!
    public function setFirstName($first_name) {
        $this->firstName = $first_name;
    }
    public function setLastName($last_name) {
        $this->lastName = $last_name;
    }
    public function setGender($_gender){
        $this->gender = _gender;
    }


    // The Gets - named for what they do.
    public function getGender() {
        return $this->gender();
    }
    public function getFirstName() {
        return $this->firstName;
    } 
    public function getLastName() {
        return $this->lastName;
    } 

    // Construct and return the profile
    public function getProfile() {
        if ($this->firstName == "" || $this->lastName == "" || $this->gender == "") {
            return "Initial data not provided.  Please populate first and last name and gender.";
        }  else {
            return $this->firstName . " is"  . $this->getCareer() . "and" . $this->getHeShe(). " " . $this->getHobbyVerb(). " " . $this->getHobbyObject();
        }
    }

    // Private Methods - this is where the profile is determined based on radomly selected sentence fragments.
    // Genrate random number 1 to 10
    private function getRndNumber() {
        $num = rand(0, 9);
        return $num;
    }

    // Pick a career at random
    private function getCareer() {
        $career=array(" a software developer ", 
                            " a taxidermist ",
                            " an accoutant ", 
                            " a professional gambler ", 
                            " a sommelier ", 
                            " a bingo manager ",
                            " an embalmer ",
                            " Civil War battlefield re-enactor ",
                            " conspiracy theorist/researcher ",
                            " foley artist ");
        return $career[$this->getRndNumber() ];
    }

    // Return appropriate gender pronoun
    private function getHeShe() {
        if ($this->gender == "female") {
            return " she ";
        } else {
            return " he ";
        }
    }

    
    private function getHobbyVerb() {
        $verb=array(" enjoys ", 
                            " has a weakness for ",
                            " is fascinated with ", 
                            " has, as a hobby, ", 
                            " likes ", 
                            " is interested in ",
                            " has many interests including ",
                            " has an obessesive interest in ",
                            " and spends weekends " ,
                            " very much enjoys ");
        return $verb[$this->getRndNumber() ];
    }

    private function getHobbyObject() {
        $object=array(" gardening.", 
                            " martial arts weaponry.",
                            " studying herpetology.", 
                            " collecting and watching the worst movies ever made.", 
                            " cooking.", 
                            " alchemy.",
                            " street racing .....for pink slips, high cash prizes and any brawl that often results.",
                            " modular synthesizers and all things audio.",
                            " conspiracy theory.",
                            " looking for the best Lebanese restaurant in the tristate area.");
        return $object[$this->getRndNumber()] ;
    }
}