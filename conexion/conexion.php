<?php 
    $con = null;
    $con = new mysqli('localhost','root','root','plan-desarrollo');
    $con -> query("SET NAMES UTF8");
    $con -> query("SET CHARACTER SET utf8");
?>