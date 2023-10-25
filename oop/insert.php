<?php
require_once('resource/php/class/insert.php');
if(!empty($_GET['task']))
{
    $insert = new insert($_GET['task']);
    $insert->insertTask();
    
    header('Location:index2.php');
}
else
{
    header('Location:index2.php');
}
?>