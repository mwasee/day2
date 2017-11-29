<?php

$str1=$_REQUEST['str1'];
$str2=$_REQUEST['str2'];
$str3=$_REQUEST['str3'];

$replace=str_replace($str1,$str2,$str3);

echo "this is replace demo::".$replace;

