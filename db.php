<?php
$db = new Mysqli;
$db->connect('localhost','root','','area');

if(!$db){
    echo "success";
}

?>