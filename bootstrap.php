<?php

include_once "Math.php";
include_once "HTMLGenerator.php";
function __autoload($name)
{
}

echo Math::circleRang(3);

$HTMLGen = new HTMLGenerator('./data/article_1.txt');

$HTMLGen
    ->wrapEachInP()
    ->addTextToTop(HTMLGenerator::getImg('dlbdRweG5Rs.jpg', 'dlbdRweG5Rs'))
    ->addTextToTop(HTMLGenerator::getTitle('Title'))
    ->wrapAllInBox('wrapper');

