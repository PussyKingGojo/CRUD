<?php
require_once('config.php');
class edit extends config
{
    public $id;

    function __construct($id=null)
    {
        $this->id=$id;

    }

    public function editTask()
    {
        $config = new config;
        $con = $config->con();   
        $sql = "UPDATE `tbl_task` SET `status`='COMPLETED',`date_completed`=NOW() WHERE id='$this->id'";
        $data = $con->prepare($sql);
        $data->execute();
       
    }
}
?>