<?php
$str ='HELLO!';
$i=0;
$LEN = strlen($str);
while ($i < $LEN){
    echo $str{$i} . "<br>";
    $i++;
}