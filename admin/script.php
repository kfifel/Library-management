<?php
    include('database/dbConnexion.php');
    session_start();

    if(isset($_POST['connexion'])) {
        $email = stripslashes($_POST['email']);
        global $conn;
        $email = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $query = "SELECT * FROM manager WHERE email = '$email' and password='" . hash('sha256', $password) . "'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_fetch_assoc($result);
        if ( mysqli_num_rows($result) > 1) {
            $_SESSION['id']  = $rows['id'];
            $_SESSION['first_name_admin'] = $rows['first_name'];
            $_SESSION['last_name_admin']  = $rows['last_name'];
            $_SESSION['email']  = $rows['email'];
            header("Location: /index.php");
        } else {
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
            echo $message;
            header("Location: /pages/sign-in.php");
        }
    }