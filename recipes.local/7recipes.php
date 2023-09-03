<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "templates/header.php"; ?>
    <section class="main" id="recipes">
        <div class="recipesContainer">
            <div class="mainBox">
                <img src="img/delimiter.png" alt="delimiter" class="delimiter" />
                <h2>7 ЛУЧШИХ РЕЦЕПТОВ НЕДЕЛИ</h2>
                <div class="recipes">
                    <?php 
                    // array_filter — Фильтрует элементы массива с помощью callback-функции
                    // https://www.php.net/manual/ru/function.array-filter.php
                    $week_recipes = array_filter($recipes, 'is_week_recipe');
                    function is_week_recipe($item) {
                        $result = false;
                        if ($item['week_recipe'] === true) {
                            $result = true;
                        }
                        return $result;
                    }
                    $counter = 0;
                    // https://stackoverflow.com/questions/11529280/how-to-find-index-of-object-in-php-array
                    // https://www.php.net/manual/en/function.var-dump
                    foreach($week_recipes as $index => $item) { 
                        $counter++;
                        if ($counter > 7) {
                            // Чтобы выводилось не больше 7 рецептов.
                            break;
                        }
                    ?>
                    <?php include "templates/card.php"; ?>
                    <?php 
                    } 
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php include "templates/hot.php"; ?>
    <?php include "templates/footer.php"; ?>
</body>
</html>
