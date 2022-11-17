<?php
    include('database/dbConnexion.php');

    $books = array();
    getAllBook();

    if(isset($_POST['log-in']))  login();
    if(isset($_POST['add-admin'])) logUp();
    if(isset($_GET['log-out'])) logOut();
    if(isset($_POST['add-book'])) addBook();


    function getAllBook(){
        global $conn;
        global $books;

        $req = "SELECT * FROM book";
        $res = mysqli_query($conn, $req);
        if($res){
            while($row = mysqli_fetch_assoc($res))
                $books[] = $row;
        }else
            echo mysqli_error();
    }

    function addBook()
    {
        global $conn;

        $isbn  = vierifyString($_POST['isbn']);
        $title = vierifyString($_POST['title']);
        $n_page = $_POST['n_page'];
        $quantity = $_POST['quantity'];
        $description = vierifyString($_POST['description']);


        $img=$_FILES['img']['name'];
        $fileTmpName=$_FILES['img']['tmp_name'];
        $fileError=$_FILES['img']['error'];
        $fileExt=explode('.', $img);
        $fileActualExt=strtolower(end($fileExt));
        $allowed=array('jpg','png','jpeg');
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError===0) {
                $fileNameNew=uniqid('img',true).".".$fileActualExt;
                $fileDestination='../assets/images/book/'.$fileNameNew;
                $req = "INSERT INTO book 
                    (isbn, title, n_page, quantity, description, img) value 
                    ('$isbn', '$title', $n_page, $quantity, '$description', '$fileNameNew')";
                $res = mysqli_query($conn, $req);
                if($res) {
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: ../pages/overview-book.php");
                }
                else
                    $_SESSION['error'] = "Error  :".mysqli_error($conn);
            }else{ echo "there was an error in the importing of your image plise try again ";}
        }else{ echo "you cannot upload  a image with type : ".$fileActualExt;}


    }

    function login(){
        global $conn;

        $email = vierifyString($_POST['email']);
        $password = vierifyString($_POST['password']);

        $query = "SELECT * FROM manager WHERE email = '$email' and password='" . hash('sha256', $password) . "'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_fetch_assoc($result);

        if ( mysqli_num_rows($result) > 0) {
            $_SESSION['id_admin']  = $rows['id'];
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
            $password2 = vierifyString($_POST['password2']);
            $first_name = vierifyString($_POST['first_name']);
            $last_name = vierifyString($_POST['last_name']);
            if($password != $password2){
                $_SESSION['message'] = "les mot de passes pas similaire ";
                header("Location:  ../../pages/add-admin.php");
            }
            $req = "INSERT INTO manager VALUE (null, '$first_name', '$last_name', '$email','".hash('sha256', $password)."')";
            $res = mysqli_query($conn, $req);
            if($res){
                $_SESSION['message'] = "bien enregistrer ";
                header('Location: /index.php');
            }
            else{
                $_SESSION['message'] = "erreur d'enregistrement :".mysqli_error();
                header('Location: ../../pages/add-admin.php');
            }
        }else{
            $_SESSION['message'] = "il faut remplir touts les champs ";
            header('Location: ../../pages/add-admin.php');
        }

    }

    function logOut(){
        session_destroy();
        header('Location: ../pages/login.php');
    }

    function vierifyString($str): string{
        global $conn;
        $str = stripslashes($str);
        return mysqli_real_escape_string($conn, $str);
    }