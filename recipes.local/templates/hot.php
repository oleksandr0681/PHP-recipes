<div class="hot" id="hot">
    <div class="recipesContainer">
        <div class="hotBox">
            <img src="img/delimiter.png" alt="delimiter" class="delimiter" />
            <h2><?php echo $menu_items[2]['title']; ?></h2>
            <div class="hotRecipes">
                <div class="hotRecipe">
                    <a href="hot-recipes.php?category=morning" >
                        <img src="<?php echo 'img/' . $hot_recipes[0]['image']; ?>" 
                        alt="<?php echo $hot_recipes[0]['title']; ?>" />
                    </a>
                    <a href="hot-recipes.php?category=morning" class="hotRecipeAbove">
                        <h2><?php echo $hot_recipes[0]['title']; ?></h2>
                    </a>
                </div>
                <div class="hotRecipe">
                    <a href="hot-recipes.php?category=main dish" >
                        <img src="<?php echo 'img/' . $hot_recipes[1]['image']; ?>" 
                        alt="<?php echo $hot_recipes[1]['title']; ?>" />
                    </a>
                    <a href="hot-recipes.php?category=main dish" class="hotRecipeAbove">
                        <h2><?php echo $hot_recipes[1]['title']; ?></h2>
                    </a>
                </div>
                <div class="hotRecipe">
                    <a href="hot-recipes.php?category=children" >
                        <img src="<?php echo 'img/' . $hot_recipes[2]['image']; ?>" 
                        alt="<?php echo $hot_recipes[2]['title']; ?>" />
                    </a>
                    <a href="hot-recipes.php?category=children" class="hotRecipeAbove">
                        <h2><?php echo $hot_recipes[2]['title']; ?></h2>
                    </a>
                </div>
                <div class="hotRecipe">
                    <a href="hot-recipes.php?category=healthy" >
                        <img src="<?php echo 'img/' . $hot_recipes[3]['image']; ?>" 
                        alt="<?php echo $hot_recipes[3]['title']; ?>" />
                    </a>
                    <a href="hot-recipes.php?category=healthy" class="hotRecipeAbove">
                        <h2><?php echo $hot_recipes[3]['title']; ?></h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
