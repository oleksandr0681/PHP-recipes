<div class="hero">
    <div class="recipesContainer">
        <div class="heroBlock">
            <img src="img/delimiter.png" alt="delimiter" class="delimiter" />
            <h2><?php echo $menu_items[0]['title']; ?></h2>
            <div class="heroBlock__recipes">
                <?php 
                    // array_search — Осуществляет поиск данного значения в массиве 
                    //  и возвращает ключ первого найденного элемента в случае удачи
                    // https://www.php.net/manual/ru/function.array-search.php
                    // array_column — Возвращает массив из значений одного столбца входного массива
                    // https://www.php.net/manual/ru/function.array-column.php
                    $index = array_search(true, array_column($recipes, 'dish_day'));
                    if ($index) {
                ?>
                <div class="heroRecipe">
                    <a href="single.php?index=0" >
                        <img src="<?php echo 'img/recipes/' . $recipes[$index]['main_img']; ?>" 
                        alt="<?php echo $recipes[$index]['title']; ?>" 
                        />
                    </a>
                    <a href="single.php?id=<?php echo $recipes[$index]['id'] ?>" class="heroRecipe__above">
                        <div>
                            <p>БЛЮДО ДНЯ</p>
                            <h2><?php echo $recipes[$index]['title']; ?></h2>
                            <img src="img/delimiter2.png" alt="delimiter" />
                        </div>
                    </a>
                </div>
                <?php } ?>

                <div class="heroRecipe">
                    <a href="single.php?index=0" >
                        <img src="img/recipes/7recipes.png" 
                        alt="7recipes" 
                        />
                    </a>
                    <a href="7recipes.php" class="heroRecipe__above">
                        <div>
                            <p>ЛУЧШИЕ РЕЦЕПТЫ НЕДЕЛИ</p>
                            <h2>7 ЛУЧШИХ РЕЦЕПТОВ НЕДЕЛИ</h2>
                            <img src="img/delimiter2.png" alt="delimiter" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
