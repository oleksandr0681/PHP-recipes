<?php 
include "functions.php";
include "database.php";

$is_login = false;
$user = [
    'login' => 'admin', 
    'password' => '123'
];
// https://www.php.net/manual/en/function.isset
if (isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['user_name'])) {
    if ($_POST['login'] == $user['login'] && $_POST['pass'] == $user['password']) {
        $is_login = true;
    }
}

?>

<div class="header">
    <div class="recipesContainer">
        <div class="headerBox">
            <div class="menu">
            <?php 
                foreach($menu_items as $item) {
                    $menu_item_class = 'menu__item';
                
            ?>
                <a href="<?php echo $item['href']; ?>" class="<?php echo $menu_item_class; ?>">
                    <?php echo $item['title']; ?>
                </a>
            <?php } 
            if ($is_login) {

            
            ?>
            <p><?php echo $_POST['user_name'] ?> авторизован</p>
            <?php } 
            else { 
            ?>
            <a href="login.php"><button>Авторизация</button></a>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
