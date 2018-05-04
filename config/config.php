<?php
    function db () {
    static $conn;
    if ($conn===NULL){ 
        $conn = mysqli_connect ("localhost", "root", "", "student");
    }
    return $conn;
}

    
     
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";


        
    $conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(!$conn1){
        die("Connection failed: ". mysqli_connect_error());
    }