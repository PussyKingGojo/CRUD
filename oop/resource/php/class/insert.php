<?php
require_once('config.php');
class insert extends config
{
    public $task;

    function __construct($task=null)
    {
        $this->task=$task;

    }

    public function insertTask()
    {
        $config = new config;
        $con = $config->con();   
        $sql = "INSERT INTO `tbl_task`(`task`) VALUES ('$this->task')";
        $data = $con->prepare($sql);
        $data->execute();
       
    }
}
?>