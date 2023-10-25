<?php
require_once('resource/php/class/edit.php');
if(!empty($_GET['id']))
{
    $edit = new edit($_GET['id']);
    $edit->editTask();
    
    header('Location:index2.php');
}
else
{
    header('Location:index2.php');
}
?>