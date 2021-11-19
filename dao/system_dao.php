<?php
function get_connect(){
    $connect = new PDO("mysql:host=localhost;dbname=kaopiz;charset=utf8", "root", "");
    return $connect;
}


function executeQuery($sql, $getAll = false){

    $connect = get_connect();
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    if($getAll){
        return $stmt->fetchAll();
    }

    return $stmt->fetch();
}



?>