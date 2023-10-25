<?php
require_once('resource/php/class/delete.php');
if(!empty($_GET['id']))
{
    $delete = new delete($_GET['id']);
    $delete->deleteTask();
    
    header('Location:index2.php');
}
else
{
    header('Location:index2.php');
}
?>