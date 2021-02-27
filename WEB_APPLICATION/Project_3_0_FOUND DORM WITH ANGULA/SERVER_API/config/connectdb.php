<?php
function database(){
    $serverName = "45.77.38.248";
    $username = "abcdfe002";
    $password = "9CUz%eFW";
    $dbName = "fd_02_db";
    $objCon = mysqli_connect($serverName,$username,$password,$dbName);
    mysqli_set_charset($objCon,"utf8");
    return $objCon;
}

function statusConnectionDB(){
    $conn = database();
    if(!$conn){
        echo json_encode(array("status"=>"fail","msg"=>mysqli_connect_error()));
        mysqli_close($conn);
    }else{
        mysqli_close($conn);
        echo json_encode(array("status"=>"ok","msg"=>"Connected successfully"));
    }
}
?>