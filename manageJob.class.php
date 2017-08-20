<?php

/**
 * Description of ManageJob
 * 
 *
 * @author Harish
 */

require 'db_connection.php';

class ManageJob {
    
    public function createJob(){
     $db = new DbConnection();
     $sql = "";//Create Sql Query
     }
    public function hideJob(){
     
     $db = new DbConnection();
     $sql = "";//Deactivating the job  
     
    }
    public function updateJob(){
     $db = new DbConnection();
     $sql = "";//Create Update Job   
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
