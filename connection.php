<?php


function checkIfSet($item){
    if(isset($_REQUEST[$item]) && !empty($_REQUEST[$item]))
        return true;
    else
        return false;
}





global $con;
$host = "localhost";
$user = "root";
$password = "";
$database = "meteora";
$con = mysqli_connect($host, $user, $password, $database);
//$con = mysqli_connect("mysql.1freehosting.com","u456392193_rohit","15w60ps","u456392193_gflo");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


function executeCommand($query){
    global $con;
    $q_run = mysqli_query($con,$query) or die(mysqli_error($con));

    if($q_run){
        return true;
    }else{
        return false;
    }
}


function retrieveData($query){
    global $con;

    $q_run = mysqli_query($con,$query) or die(mysqli_error($con));
    $arr = [];

    if($q_run){
        while($row = mysqli_fetch_assoc($q_run)){
            array_push($arr,$row);
        }

        return $arr;
    }else{
        echo mysqli_error($con);
    }

    return 0;
}





