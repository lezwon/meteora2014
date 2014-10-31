<?php


global $con;


$production = 0;

if($production){
    //PRODUCTION

    $host = "mysql.1freehosting.com";
    $user = "u572493528_bosco";
    $password = "82PJV7fuvL";
    $database = "u572493528_met";
}else{
    //DEVELOPMENT

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "meteora";
}



$con = mysqli_connect($host, $user, $password, $database);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


function checkIfFieldSet($item){

    if(is_array($item)){
        foreach($item as $field){
            if(isset($_REQUEST[$field]) && !empty($_REQUEST[$field]))
                continue;
            else
                return false;
        }
    }else{
        if(isset($_REQUEST[$item]) && !empty($_REQUEST[$item]))
            return true;
        else
            return false;
    }

    return true;
}

function checkIfFileSet($item){

    if(is_array($item)){
        foreach($item as $field){
            if(isset($_FILES[$field]) && !empty($_FILES[$field]))
                continue;
            else
                return false;
        }
    }else{
        if(isset($_FILES[$item]) && !empty($_FILES[$item]))
            return true;
        else
            return false;
    }

    return true;
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
    $arr = array();

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





