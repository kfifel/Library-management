<?php

    $conn = mysqli_connect("localhost", "root", "", "library");

    try{
        if (!$conn)
            throw new Exception('Unable to connect');
    }catch(Exception $e){
        echo 'unable to connect: ',  $e->getMessage(), "\n";
    }

   // $res = $conn->query("INSERT INTO manager VALUES (null, 'khalid', 'FIFEL', 'khalid@admin.com', '".hash('sha256', "admin")."')");
   // if($res) echo 'bien ajouter';