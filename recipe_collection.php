<!-- The COLLECTION object
-A collection object can hold a group of objects and allow us to perform action on this object -->
<?php
class RecipeCollection
{
    private $title;
    private $recipe = [];
    
     public function __construct($tit)
    {
        $this -> title = $tit;
    }
    public function getTitle()
    {
        return $this -> title;
    }
    public function addRecipe($recipe)
    {
        $this -> recipe[] = $recipe;
    }
    public function getRecipe()
    {
        return $this -> recipe;
    }
     public function getRecipeTitle()
     {
         $recipe_menu = [];
         $i = 0;
         foreach($this -> recipe as $getT)
         {
             $recipe_menu["$i"] = $getT -> getTitle();
             $i++;
         }
         return $recipe_menu;
     }
    public function filterByTag($tg)
    {
        $taggedRecipes = [];
        foreach($this -> recipe as $getTg)
        {
            if(in_array($tg,$getTg -> getTag()))
            {
                $taggedRecipes[] = $getTg -> getTitle();
            }
            
        }
        return $taggedRecipes;
    }
    public function getCombinedIngredients()
    {
        $ingredientss = [];
        foreach($this -> recipe as $recip)
        {
            foreach($recip -> getIngredient() as $ingred)
            {
                $item = ucwords($ingred["item"]);
                if(strpos($item,","))
                {
                    $item = strstr($item,",",true);
                }
                //Check if plural version of the item got or not
                if(in_array($item."s",$ingredientss))
                {
                    $item .= "s";
                }
                else if(in_array(substr($item,0,-1),$ingredientss))
                {
                    $item = substr($item,0,-1);
                }
                $ingredientss[$item] = [
                    $ingred["amount"],
                    $ingred["measure"]
                ];
            }
        }
        return $ingredientss;
    }
    
    public function filterbyId($id)
    {
        return $this -> recipe["$id"];
    }
    
}

?>