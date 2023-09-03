<?php 
$filter_param = $_GET['category'];
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
                <h2>ГОРЯЧИЕ РЕЦЕПТЫ</h2>
                <div class="recipes">
                    <?php 
                    // array_filter — Фильтрует элементы массива с помощью callback-функции
                    // https://www.php.net/manual/ru/function.array-filter.php
                    $filtered_recipes = array_filter($recipes, 'filter_recipes');
                    function filter_recipes($item_recipe) {
                        global $filter_param;
                        $result = false;
                        foreach($item_recipe['category'] as $attr) {
                            if ($attr == $filter_param) {
                                $result = true;
                            }
                        }
                        // https://www.php.net/manual/en/function.var-dump
                        // var_dump($result);
                        return $result;
                    }

                    // https://stackoverflow.com/questions/11529280/how-to-find-index-of-object-in-php-array
                    // https://www.php.net/manual/en/function.var-dump
                    foreach($filtered_recipes as $index => $item) { 
                        
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
