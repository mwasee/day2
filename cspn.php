<?php

$str1=$_REQUEST['string1'];
$str2=$_REQUEST['string2'];

$cspn=strcspn($str1,$str2);

echo "this is cspn==".$cspn;

