<?php

$str=$_REQUEST['str1'];
$str=$_REQUEST['str2'];
$str=$_REQUEST['str3'];

$tr=strtr($str);

echo "this is strtr==".$tr;

