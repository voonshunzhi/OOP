<?php
class Recipe
{
    private $ingredient = [];
    private $source = " ";
    private $title = " ";
    private $instruction = [];
    private $yield;
    private $tags = [];
    private $measurements = 
    [
        "lb","Cup","tbsp","tsp","oz","cup","quart"
    ];
    
    public function __construct($tit)
    {
        $this -> title = $tit;
    }
    //Good habit to give variable a default value;
    public function addIngredient($item = null,$amount = null,$measure = null)
    {
        //If there is value, check if the value is integer or float
        if($amount != null && !is_int($amount) && !is_float($amount))  
        {
            exit("Please enter a number. " . " The datatype that you are entering is " . gettype($amount) . " which is not and integer or float number.");
        }
        if($measure != null && !in_array($measure,$this -> measurements))
        {
            exit("Please enter a valid measurement " . " such as ". implode(",",$this -> measurements));
        }
        $this -> ingredient[] = [
            "item" => $item,
            "amount" => $amount,
            "measure" => $measure
        ];
    }
    public function getIngredient()
    {
        return $this -> ingredient;//USE RETURN SO THAT THE WHOLE FUNCTION EQUALS TO THE OUTCOME OF THE FUCNTION
        
    }
    
    public function addInstruction($inst)
    {
        $this -> instruction[] = $inst;
    }
    
    public function getInstruction()
    {
        return implode("<br>", $this -> instruction);
    }
        
    public function setSource($sour)
    {
        $this -> source = $sour;
    }
    
    public function getSource()
    {
        return $this -> source ;
    }
    
    public function addTag()
    {
            $array = func_get_args();
            foreach($array as $t)
            {
                $this -> tags[] = $t ;
            }
    }
    
    public function getTag()
    {
        return $this -> tags;
    }
    
     public function setYield($yie)
    {
        $this -> yield = $yie;
    }
    
    public function getYield()
    {
        return $this -> yield ;
    }
    
    public function getTitle()
    {
        return $this -> title;
    }
    
    
    
}
?>