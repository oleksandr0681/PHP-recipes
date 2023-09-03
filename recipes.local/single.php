<?php 
// include "functions.php";

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
    <div class="single">
        <div class="recipesContainer">
            <div class="singleBox">
                <?php 
                $id = $_GET['id'];
                // $index = $_GET['index'];
                // array_search — Осуществляет поиск данного значения в массиве 
                //  и возвращает ключ первого найденного элемента в случае удачи
                // https://www.php.net/manual/ru/function.array-search.php
                // array_column — Возвращает массив из значений одного столбца входного массива
                // https://www.php.net/manual/ru/function.array-column.php
                $index = array_search($id, array_column($recipes, 'id'));
                ?>
                <div class="singleHeader">
                    <img src="<?php echo 'img/recipes/' . $recipes[$index]['main_img']; ?>" 
                        alt="<?php echo $recipes[0]['title']; ?>" 
                        class="singleHeader__picture" />
                    <div class="singleHeader__text">
                        <h2 class="singleHeader__title"><?php echo $recipes[$index]['title']; ?></h2>
                        <div class="singleHeader__attributes">
                            <div class="singleHeader__attr"><?php echo $recipes[$index]['attr_cooking'][0]; ?></div>
                            <div class="singleHeader__attr"><?php echo $recipes[$index]['attr_cooking'][1]; ?></div>
                            <div class="singleHeader__attr"><?php echo $recipes[$index]['attr_cooking'][2]; ?></div>
                        </div>
                        <div class="singleHeader__excerpt"><?php echo $recipes[$index]['excerpt']; ?></div>
                        <div class="singleHeader__author">
                            <img src="<?php echo 'img/' . $recipes[$index]['author']['avatar']; ?>" alt="" />
                            <span>
                                <?php echo $recipes[$index]['author']['name']; ?>
                            </span>
                        </div>
                        <div class="singleHeader__bottom">
                            <div class="singleHeader__like">
                                <img src="img/like.png" alt="like" />
                                <?php echo $recipes[$index]['meta']['likes']; ?>
                            </div>
                            <div class="singleHeader__social">
                                <a href="<?php echo $recipes[$index]['meta']['vk']; ?>">
                                    <img src="img/vk.png" alt="picture" />
                                </a>
                                <a href="<?php echo $recipes[$index]['meta']['fb']; ?>">
                                    <img src="img/facebook.png" alt="picture" />
                                </a>
                                <a href="<?php echo $recipes[$index]['meta']['ok']; ?>">
                                    <img src="img/odnoklassniki.png" alt="picture" />
                                </a>
                            </div>
                        </div>
                        <div class="singleHeader__thumbnails">
                            <?php foreach ( $recipes[$index]['thumbnails'] as $key => $value) {
                                 
                            ?>
                            <img src="<?php echo 'img/recipes/' . $value; ?>" alt="" />
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="singleMain">
                    <?php echo $recipes[$index]['text']; ?>
                </div>
            </div>
        </div>
        
    </div>
    <?php include "templates/hot.php"; ?>
    <?php include "templates/footer.php"; ?>
</body>
</html>
