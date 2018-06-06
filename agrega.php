<?php
    include 'db.php';

    if(isset($_POST['send'])){
        $prueba = $_POST['cosas'];
        $radioValue  = $_POST['area'];
       
        if($radioValue == "front"){
            $sql = "insert into front (herramienta2) values ('$prueba')";
        }else if($radioValue == "back"){
            $sql = "insert into back  (herramienta1) values ('$prueba')";
        }
       $val = $db->query($sql);
       if($val){
            header('location: index.php');
       }
    }



?>