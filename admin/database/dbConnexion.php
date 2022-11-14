<?php

    $conn = mysqli_connect("localhost", "root", "", "library");

    try{
        if (!$conn)
            throw new Exception('Unable to connect');
    }catch(Exception $e){
        echo 'unable to connect: ',  $e->getMessage(), "\n";
    }