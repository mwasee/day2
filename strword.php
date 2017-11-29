<?php

//how to get from varaible value

$str=$_REQUEST['wordvalue'];

//now count the value  by function
$word= str_word_count($str);


//msg 
echo "word of given string is :".$word;
