<?php
/**
 * Created by PhpStorm.
 * User: svizgart
 * Date: 08.09.18
 * Time: 18:06
 */
define('AAA', 100);
?>

<h3>За чем мы ходим в школу?</h3>

<blockquote>
    <?= AAA ?>
    <?= setlocale(LC_ALL, "Russian");?>
    
    <?= strftime('Сегодня %d-%B-%Y');?>
</blockquote>
