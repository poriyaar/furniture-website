<?php 

function post_content($text)
{
     $text = substr($text , 0, 2500);
     $text = substr($text,0,strrpos($text, " "));
     $text.="...";

     return $text;
}



?>