<?php

//nom description durée annéeDeSortie

class Film
{
    private $name;
    private $description;
    private $lenght;
    private $release;
    
    function __construct(String $name, String $description, int $lenght, DateTime $release)
    {
        $this->name=$name;
        $this->description=$description;
        $this->lenght=$lenght;
        $this->release=$release;
    }
    
    function getName()
    {
        return $this->name = $name;
    }
    
    function getDescription()
    {
       return $this->description = $description; 
    }
    
    function getLenght()
    {
        return $this->lenght = $lenght;
    }
    
    function getRelease()
    {
        return $this->release->format('d-m-Y');
    }
    
    function toString()
    {
        //var_dump($this->release);
        //echo $this->release->format('d-m-Y');
        echo "name: $this->name, description: $this->description, lenght: $this->lenght, date: " . $this->release->format('d-m-Y');
    }
    
}

$f1 = new Film('jojo','babababa lilili', 128, new DateTime("25-11-1998"));

$f1->toString();

$f1->getRelease();