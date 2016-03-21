<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
  <?php
 
$servername = "eu-cdbr-azure-west-d.cloudapp.net";
$username = "bfa66b3b5d02fb";
$password = "a3bb67b4";
 
$dname = "step-mysql-db";
 
function MySQLconnect(){
    try {
        global $servername, $dname, $password, $username;
        $conn = mysqli_connect($servername, $username, $password);
       
        if ($conn->connect_error)
            die("Connection failed");
       
       
        $sql = "create table maxMysqlTable ("
                . "id int(6) unsigned auto_increment primary KEY, "
                . "firsname VARCHAR(255) not null, "
                . "lastname VARCHAR(255) not null"
                . ")";
       
        if ($conn->query($sql)) {
            echo 'Table created';
        } else {
            echo 'Error while creating table';
        }
       
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}
 
function PDO_client(){
    try {
        $conn = new PDO("mysql:host=".$servername, $username, $password);
        $conn->setAttribute(PDO::ATT_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
        $sql = "create database myDB";
        $conn = NULL;
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}

    </body>
</html>
