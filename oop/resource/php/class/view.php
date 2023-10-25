<?php

require_once('config.php');

class view extends config
{
    public function viewTask()
    {
        $config = new config;
        $con = $config->con();   
        $sql = "SELECT * FROM `tbl_task` WHERE `status`='PENDING'";
        $data = $con->prepare($sql);
        $data->execute();
        $data = $data->fetchAll(PDO::FETCH_ASSOC);
        echo"<table class='table table-dark'>
        <thead>
          <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Task</th>
            <th scope='col'>Date Created</th>
            <th scope='col'>Actions</th>
          </tr>
        </thead>
        <tbody>";

        foreach ($data as $row){
            echo"<tr>";
            echo"<td>$row[id]</td>";
            echo"<td>$row[task]</td>";
            echo"<td>$row[date_created]</td>";
            echo"<td>
            <a href='edit.php?id=$row[id]' class='btn btn-success'>Complete Task</a>
            <a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete Task</a>
            </td>";
            echo"</tr>";
        


        
        }
          
       echo "</tbody>
            </table>";
    }
    public function viewTask2()
    {
        $config = new config;
        $con = $config->con();   
        $sql = "SELECT * FROM `tbl_task` WHERE `status`='COMPLETED'";
        $data = $con->prepare($sql);
        $data->execute();
        $data = $data->fetchAll(PDO::FETCH_ASSOC);
        echo"<table class='table table-dark'>
        <thead>
          <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Task</th>
            <th scope='col'>Date Created</th>
            <th scope='col'>Date Completed</th>
          </tr>
        </thead>
        <tbody>";

        foreach ($data as $row){
            echo"<tr>";
            echo"<td>$row[id]</td>";
            echo"<td>$row[task]</td>";
            echo"<td>$row[date_created]</td>";
            echo"<td>$row[date_completed]</td>";
           
            echo"</tr>";
        


        
        }
          
       echo "</tbody>
            </table>";
    }
}


?>