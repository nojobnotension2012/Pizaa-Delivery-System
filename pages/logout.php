<?php
    session_start();
    if(!isset($_SESSION['username'])  && !isset($_SESSION['password'])){
        echo "Please login before you logout";   
    }else{
        
        include "../db/database.php";
        try{
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            $con = null;
            header('location:../index.php');
            
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
?>