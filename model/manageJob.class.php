<?php

/**
 * Description of ManageJob
   This is my model class which serve all db operation  
 * 
 *
 * @author Harish
 */

require 'db_connection.php';

class ManageJob {
    
    public function createJob(){
     $db = new DbConnection();
     $sql = "INSERT INTO job_list(job_category,....) values(?,?....)";
     //sanitze input f\or avidong sql injection
     $sql_stmt= $conn->prepare($sql);
     $sql_stmt->bind_param("s...", $_POST["j_category"],...);
     $sql_stmt->execute();
     $sql_stmt->close();
     return true; 
     }
    public function hideJob(){
     
     $db = new DbConnection();
     $sql = "UPDATE job_list SET job_status=0 where job_id=?";
     $sql_stmt= $conn->prepare($sql);
     $sql_stmt->bind_param("i", $_POST["j_id"]);
     $sql_stmt->execute();
     $sql_stmt->close();
     return true;
    }
    public function updateJob(){
 
    $db = new DbConnection();
     $sql = "UPDATE job_list SET job_status=0,..... where job_id=?,....";
     $sql_stmt= $conn->prepare($sql);
     $sql_stmt->bind_param("i....", $_POST["j_id"]...);
     $sql_stmt->execute();
     $sql_stmt->close();
     return true;
    }
    public function addJobForUser(){
    
     $db = new DbConnection();
     $sql = "";//Sql Query for adding user in user's save list
     
    }
    public function showJob(){
     $db = new DbConnection();
     $sql = "";//Acitivate Sql Query
      
    }
    public function getJobList(){
     $db = new DbConnection();
     $sql = "";//Job Listing
    }
    public function removeJobUser(){
     $db = new DbConnection();
     $sql = "";//Removing job from user saved List   
    }
}
