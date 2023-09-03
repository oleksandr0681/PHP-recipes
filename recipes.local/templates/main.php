<?php 
$sort_param = $_GET['sort'];
// https://www.php.net/manual/en/function.empty.php
if (empty($_GET['sort'])) {
    // В первом поле в массиве array_search возвращает false.
    // Вместо array_search я использовал свой поиск.
    $sort_param = 'new';
}
?>

<section class="main" id="recipes">
    <div class="recipesContainer">
        <div class="mainBox">
            <img src="img/delimiter.png" alt="delimiter" class="delimiter" />
            <h2><?php echo $menu_items[1]['title']; ?></h2>
            <div class="mainBox__menu">
                <?php 
                foreach($main_box_menu as $index => $item) {
                    $menu_item_class = 'mainBox__menuItem';
                    if ($item['href'] === $sort_param) {
                        $menu_item_class = $menu_item_class . ' ' . 'mainBox__menuItem_active';
                    }
                ?>
                    <a  href="<?php echo 'index.php?sort=' . $item['href']; ?>" class="<?php echo $menu_item_class; ?>">
                        <?php echo $item['title']; ?>
                    </a>
                <?php } ?>
            </div>
            <div class="recipes">
                <?php 
                // array_filter — Фильтрует элементы массива с помощью callback-функции
                // https://www.php.net/manual/ru/function.array-filter.php
                $sorted_recipes = array_filter($recipes, 'filter_recipes');
                function filter_recipes($item_recipe) {
                    global $sort_param;
                    $result = false;
                    // if (array_search($sort_param, $item_recipe['attr_sort']) != false) {
                    //     $result = true;
                    // }
                    foreach($item_recipe['attr_sort'] as $attr) {
                        if ($attr == $sort_param) {
                            $result = true;
                        }
                    }
                    // https://www.php.net/manual/en/function.var-dump
                    // var_dump($result);
                    return $result;
                }
                // https://stackoverflow.com/questions/11529280/how-to-find-index-of-object-in-php-array
                foreach($sorted_recipes as $index => $item) { 
                ?>
                <?php include "templates/card.php"; ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
