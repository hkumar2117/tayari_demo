<?php

/* 
 *  Job Controller - Harish 
 */


require 'ManageJob.php';
require 'User.php';
require 'globalConfig.php';

isUserSessionActive();

if($_POST['is_job_request'] == 1){
   
    if($_REQUEST['eventId'] == 2){ 
     $obj = new ManageJob();
     
     $obj->createJob();
     header("Location : index.php");
    }
    if($_REQUEST['eventId'] == 3){ 
     //create Ticket
    }
    if($_REQUEST['eventId'] == 4){ 
     //create Ticket
    }
    if($_REQUEST['eventId'] == 5){ 
     //create Ticket
    }
    if($_REQUEST['eventId'] == 6){ 
     //create Ticket
    }
    
  
    
}

function isUserSessionActive(){
    //Code for checking User session
    //return with error if active session not exist
}