<?php 
include "recipe_update.php";
include "recipe_extend.php";
include "render_update.php";
include "recipe_collection.php";

 $MyFirstRecipeBook = new RecipeCollection("Voon's First Recipe Book");
 $MyFirstRecipeBook -> addRecipe($lemon_chicken);
 $MyFirstRecipeBook -> addRecipe($granola_muffins);
 $MyFirstRecipeBook -> addRecipe($belgian_waffles);
 $MyFirstRecipeBook -> addRecipe($pepper_casserole);
 $MyFirstRecipeBook -> addRecipe($lasagna);
 $MyFirstRecipeBook -> addRecipe($dried_mushroom_ragout);
 $MyFirstRecipeBook -> addRecipe($rabbit_catalan);
 $MyFirstRecipeBook -> addRecipe($grilled_salmon_with_fennel);
 $MyFirstRecipeBook -> addRecipe($pistachio_duck);
 $MyFirstRecipeBook -> addRecipe($chili_pork);
 $MyFirstRecipeBook -> addRecipe($crab_cakes);
 $MyFirstRecipeBook -> addRecipe($beef_medallions);
 $MyFirstRecipeBook -> addRecipe($silver_dollar_cakes);
 $MyFirstRecipeBook -> addRecipe($french_toast);
 $MyFirstRecipeBook -> addRecipe($corn_beef_hash);
 $MyFirstRecipeBook -> addRecipe($granola);
 $MyFirstRecipeBook -> addRecipe($spicy_omelette);
 $MyFirstRecipeBook -> addRecipe($scones);

// echo Render::displayTheContent($MyFirstRecipeBook -> getRecipeTitle());

//echo implode("<br>",$MyFirstRecipeBook -> filterByTag("breakfast"));

//echo Render::listIngredient($MyFirstRecipeBook);
echo Render::displayTheContent($MyFirstRecipeBook -> getRecipeTitle());

 echo Render::displayRecipe($MyFirstRecipeBook -> filterbyId(16));
?>