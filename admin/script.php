<?php
    include('database/dbConnexion.php');
    session_start();

    if(isset($_POST['log-in']))  login();
    if(isset($_POST['log-up'])) logUp();




    function login(){
        global $conn;

        $email = vierifyString($_POST['email']);
        $password = vierifyString($_POST['password']);

        $query = "SELECT * FROM manager WHERE email = '$email' and password='" . hash('sha256', $password) . "'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_fetch_assoc($result);

        if ( mysqli_num_rows($result) > 0) {
            $_SESSION['id']  = $rows['id'];
            $_SESSION['first_name_admin'] = $rows['first_name'];
            $_SESSION['last_name_admin']  = $rows['last_name'];
            $_SESSION['email']  = $rows['email'];
            header("Location: /index.php");
        } else {
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
            echo $message;
            header("Location: /pages/login.php");
        }
    }

    function logUp(){
        if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name'])){
            global $conn;
            $email = vierifyString($_POST['email']);
            $password = vierifyString($_POST['password']);
            $first_name = vierifyString($_POST['first_name']);
            $last_name = vierifyString($_POST['last_name']);

            $req = "INSERT INTO manager VALUE (null, $first_name, $last_name, $email,".hash('sha256', $password).")";
            $res = mysqli_query($conn, $req);
            if($res){
                $_SESSION['message'] = "bien enregistrer ";
                header('Location: /index.php');
            }
            else{
                $_SESSION['message'] = "erreur d'enregistrement :".mysqli_error();
                header('Location: /index.php');
            }
        }else{
            $_SESSION['message'] = "il faut remplir touts les champs ";
            header('Location: /index.php');
        }

    }

    function vierifyString($str): string{
        global $conn;
        $str = stripslashes($str);
        return mysqli_real_escape_string($conn, $str);
    }