<?php
/**
 * Description of db
 *
 * @author Harish
 */

class db {
    var $host="localhost";
    var $username="root";   
    Var $password="root";
    var $database="tayari";
    var $myconn;

    function connectToDatabase(){
        $conn= mysql_connect($this->host,$this->username,$this->password);
        if(!$conn){
            die ("Cannot connect to the database");
        } else{
            $this->myconn = $conn;
           // echo "Connection established"; Will forward to some log file
        }
        return $this->myconn;
    }

    function selectDatabase() {
        mysql_select_db($this->database); 
        if(mysql_error()){
          //  echo "Cannot find the database ".$this->database;
        }
        // echo "Database selected..";       
    }
    function closeConnection() {
        mysql_close($this->myconn);
        echo "Connection closed";
    }
}

?>
