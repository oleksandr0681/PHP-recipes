<div class="footer">
    <div class="recipesContainer">
        <div class="footerBox">
            <div class="menu">
            <?php 
                foreach($menu_items as $item) {
                    $menu_item_class = 'menu__item';
                
            ?>
                <a href="<?php echo $item['href']; ?>" class="<?php echo $menu_item_class; ?>">
                    <?php echo $item['title']; ?>
                </a>
            <?php } ?>
            </div>
        </div>
    </div>                        
</div>
