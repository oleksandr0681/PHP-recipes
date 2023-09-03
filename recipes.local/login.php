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
    <main>
        <form action="index.php" method="post">
            <label>
                Login
                <input type="text" name="login" />
            </label>
            <label>
                Пароль
                <input type="text" name="pass" />
            </label>
            <label>
                Имя
                <input type="text" name="user_name" />
            </label>
            <button type="submit">Авторизоваться</button>
        </form>
    </main>
    <?php include "templates/footer.php"; ?>
</body>
</html>
