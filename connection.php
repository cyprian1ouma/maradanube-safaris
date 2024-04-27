<?php

$conn=new mysqli('localhost', 'root', '', 'registration');

if(!$conn)
{
    echo'Connection Successful';
}
//else
//{
//    echo 'Connection Error';
//}
