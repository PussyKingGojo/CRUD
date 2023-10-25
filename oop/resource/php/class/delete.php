<?php
require_once('config.php');
class delete extends config
{
    public $id;

    function __construct($id=null)
    {
        $this->id=$id;

    }

    public function deleteTask()
    {
        $config = new config;
        $con = $config->con();   
        $sql = "DELETE FROM `tbl_task` WHERE id='$this->id'";
        $data = $con->prepare($sql);
        $data->execute();
       
    }
}
?>