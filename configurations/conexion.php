<?php
    $host = "den1.mysql1.gear.host";
    $db = "appserversinf";
    $user = "appserversinf";
    $password = "Ld74jI742--a";

    try{

        $db = new PDO('mysql:host='.$host.';dbname='.$db.'', $user, $password );

    }catch(PDOException $x){

        echo "Error: ".$x->getMessage();
    }
?>