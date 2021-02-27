<?php 
    header("Access-Control-allow-Origin: *");
    header("Access-Control-allow-Methods: GET");
    header("Content-Type: application/json; charset=UTF-8");

    function getImagePath($dorm_id){
        $files = glob($dorm_id."/*.{jpg,jpeg,png}",GLOB_BRACE);
        $data = array();
        foreach($files as $item){
            $uri = "http://".$_SERVER['HTTP_HOST']."/api/assets/image/".$item;
            array_push($data,$uri);
        }
        echo json_encode(array("data" => $data));
    }

    getImagePath($_GET['dorm_id']);
?>