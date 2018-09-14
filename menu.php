<?php

function drawMenu($menu, $vertical = true) {
    $style = "";
    if (!$vertical) {
        $style = " style = 'display: inline; margin-right: 15px'";
    }
    echo "<ul>";
    foreach ($menu as $value) {
        echo "<li$style><a href='{$value['href']}'>{$value['link']}</a></li>";
    }
    echo "</ul>";
}
$leftMenu = [
    ['link' => 'Главная', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php']
];
