<?php

$str1=$_REQUEST['str1'];

$str2=$_REQUEST['str2'];




//$pos=strpos($str1,$str2);

$pos= str_replace($str2, "*", $str1);


echo "pos of given string is :".$pos;

