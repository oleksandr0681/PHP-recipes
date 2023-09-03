<div class="card">
    <div class="card__picture">
        <a href="single.php?id=<?php echo $item['id']; ?>">
            <img src="<?php echo 'img/recipes/' . $item['main_img']; ?>" 
            alt="<?php echo $item['title']; ?>" />
        </a>
        <a href="single.php?id=<?php echo $item['id']; ?>" class="card__pictureAbove">
            <div>
                <img src="<?php echo 'img/' . $item['author']['avatar']; ?>" alt="" class="aa" />
                <span>
                    <?php echo $item['author']['name']; ?>
                </span>
            </div>
        </a>
    </div>
    <div class="card__text">
        <h3 class="card__title"><?php echo $item['title']; ?></h3>
        <div class="card__attributes">
            <div class="card__attr"><?php echo $item['attr_cooking'][0]; ?></div>
            <div class="card__attr"><?php echo $item['attr_cooking'][1]; ?></div>
            <div class="card__attr"><?php echo $item['attr_cooking'][2]; ?></div>
        </div>
        <div class="card__excerpt"><?php echo $item['excerpt']; ?></div>
        <div class="card__textFooter">
            <div class="card__like">
                <img src="img/like.png" alt="like" />
                <?php echo $item['meta']['likes']; ?>
            </div>
            <div class="card__social">
                <a href="<?php echo $item['meta']['vk']; ?>">
                    <img src="img/vk.png" alt="picture" />
                </a>
                <a href="<?php echo $item['meta']['fb']; ?>">
                    <img src="img/facebook.png" alt="picture" />
                </a>
                <a href="<?php echo $item['meta']['ok']; ?>">
                    <img src="img/odnoklassniki.png" alt="picture" />
                </a>
            </div>
        </div>
    </div>
</div>
