<?php


include_once "Services/HTMLGenerator.php";
function __autoload($name)
{
}

$HTMLGen = new HTMLGenerator('./data/article_1.txt');

$HTMLGen
    ->wrapEachInP()
    ->addTextToTop(HTMLGenerator::getImg('img/dlbdRweG5Rs.jpg', 'dlbdRweG5Rs'))
    ->addTextToTop(HTMLGenerator::getTitle('Title'))
    ->wrapAllInBox('wrapper');

