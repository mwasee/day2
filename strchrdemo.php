<?php

$str=$_REQUEST['str1'];
$str2=$_REQUEST['str2'];

$chr=strchr($str,$str2);

echo "this is chr==".$chr;
