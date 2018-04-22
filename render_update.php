<?php
class Render
{
    public static function listIngredient($cookbook)
    {
        ;
        return implode("<br>",array_keys($cookbook -> getCombinedIngredients()));
    }
    
    public function displayIngredient($recipe_s)
    {
        $ingre = [];
        foreach($recipe_s -> getIngredient() as $ing)
        {
            $ingre[] = $ing["amount"] ." " . $ing["measure"] . " " . $ing["item"];
        }
        $ingre = implode("<br>",$ingre);
        return $ingre;
    }
    public static function displayRecipe($recipe)
    {
        $output = " ";
        $output .= $recipe -> getTitle() . " by " . $recipe -> getSource();
        $output .= "<br>";
        $output .= "The ingredient needed is :";
        $output .= "<br>";
        $output .= self::displayIngredient($recipe);
        $output .= "<br>";
        $output .= "Follow this step by step :";
        $output .= "<br>";
        $output .= $recipe -> getInstruction();
        $output .= "<br>";
        $output .= "The yield is " . $recipe -> getYield() . ".";
        return $output;
    }
    public static function displayTheContent($content_menu)
    {
        asort($content_menu);
        $output = " ";
        foreach($content_menu as $key => $title)//This means that it assign the key of the array as $key and the values as $title.
        {
            if($output != " ")
            {
                $output .= "<br>";
            }
            $output .= "[{$key}] {$title}";
        }
        return $output;
    }
}
?>