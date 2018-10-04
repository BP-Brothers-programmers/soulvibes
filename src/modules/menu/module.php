<nav class="menu">
    <ul class="menu__list">
        <?php foreach($menu as $item) {
            echo '<li class="menu__item">
                <a href=' . $item['link'] . ' class="menu__link">' .
                    $item['title'] .
                '</a>
            </li>';
        } ?>
    </ul>
</nav>