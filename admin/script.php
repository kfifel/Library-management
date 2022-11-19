<?php
    include('database/dbConnexion.php');

    $books = array();
    getAllBooks();

    if(isset($_POST['log-in']))  login();
    if(isset($_POST['add-admin'])) logUp();
    if(isset($_GET['log-out'])) logOut();
    if(isset($_POST['add-book'])) createBook();
    if(isset($_POST['update-book'])) updateBook();
    if(isset($_GET['d_isbn'])) deleteBook();


    function getAllBooks():void{
        global $conn;
        global $books;

        $req = "SELECT * FROM book";
        $res = mysqli_query($conn, $req);
        if($res){
            while($row = mysqli_fetch_assoc($res))
                $books[] = $row;
        }else
            echo mysqli_error($conn);
    }

    function createBook():void{
        global $conn;
        $book = getFormData();
        $req = "INSERT INTO book 
                    (isbn, title, n_page, quantity, description, img) value 
                    (?, ?, ?, ?, ?, ?)";
        $res = mysqli_prepare($conn, $req);
        mysqli_stmt_bind_param($res, "ssiiss",  ...$book);
        $res = mysqli_stmt_execute($res);
        if($res) {
            $_SESSION['message'] = "Success : bien enregistrer";
            header("Location: ../pages/overview-book.php");
        }
        else
            $_SESSION['error'] = "Error  :".mysqli_error($conn);
        header("Location: ../pages/overview-book.php");

    }

    function updateBook():void{
        global $conn;
        $book = getFormData();
        if( !empty($book['photo'] )){
            $req = "UPDATE book SET `isbn` = ?, `title` = ?, `n_page` = ?, `quantity` = ?, `description` = ?, `img` = ?
               WHERE `isbn` = '".$_SESSION['isbn']."'";
            $res = $conn->prepare($req);
            $res->bind_param("ssiiss", $book['isbn'], $book['title'], $book['n_page'], $book['quantity'], $book['description'], $book['photo']);
        }else{
            $req = "UPDATE book SET `isbn` = ?, `title` = ?, `n_page` = ?, `quantity` = ?, `description` = ?
               WHERE `isbn` = '".$_SESSION['isbn']."'";
            $res = $conn->prepare($req);
            $res->bind_param("ssiis",$book['isbn'], $book['title'], $book['n_page'], $book['quantity'], $book['description']);
        }
        if($res->execute())
            $_SESSION['message'] = "La modification a été enregistrée!";
        else
            $_SESSION['error'] = "Erreur lors de l'enregistrement!!!";
        header("Location: /pages/overview-book.php");

    }
    
    function deleteBook():void{
        global $conn;
        $isbn = $_GET['d_isbn'];
        $req = "DELETE FROM book where isbn = '".$isbn."'";
        $res = mysqli_query($conn, $req);
        if(!$res){
            echo mysqli_error($conn);
            die;
        }
        header("Location: ../pages/overview-book.php");
    }

    function login():void{
        global $conn;

        $email = verifyString($_POST['email']);
        $password = verifyString($_POST['password']);

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

    function logUp():void{
        if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name'])){
            global $conn;
            $email = verifyString($_POST['email']);
            $password = verifyString($_POST['password']);
            $password2 = verifyString($_POST['password2']);
            $first_name = verifyString($_POST['first_name']);
            $last_name = verifyString($_POST['last_name']);
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
                $_SESSION['message'] = "erreur d'enregistrement :".mysqli_error($conn);
                header('Location: ../../pages/add-admin.php');
            }
        }else{
            $_SESSION['message'] = "il faut remplir touts les champs ";
            header('Location: ../../pages/add-admin.php');
        }

    }

    function logOut():void{
        session_destroy();
        header('Location: ../pages/login.php');
    }

    function getFormData():array{
        $isbn  = verifyString($_POST['isbn']);
        $title = verifyString($_POST['title']);
        $n_page = $_POST['n_page'];
        $quantity = $_POST['quantity'];
        $description = verifyString($_POST['description']);
        $fileNameNew="";

        $img=$_FILES['img']['name']; // b2.jpg
        $fileTmpName=$_FILES['img']['tmp_name'];
        $fileError=$_FILES['img']['error'];
        $fileExt=explode('.', $img); //array ['b2' 'jpg']
        $fileActualExt=strtolower(end($fileExt));
        $allowed=array('jpg','png','jpeg');
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError===0) {
                $fileNameNew=uniqid('img',true).".".$fileActualExt;
                $fileDestination='../assets/images/book/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
            }else{
                $_SESSION['error'] = "there was an error in the importing of your image, try again!!";
                header("Location: /pages/overview-book.php");
            }
        }else{
            $_SESSION['error'] = "Extension $fileActualExt: is not allowed here";
            header("Location: /pages/overview-book.php");
        }
        return array(
            'isbn'=>$isbn,
            'title'=>$title,
            'n_page'=>$n_page,
            'quantity'=>$quantity,
            'description'=>$description,
            'photo'=>$fileNameNew);
    }

    function editBook($isbn):void{
        $GLOBALS['book'] = findBookByIsbn($isbn);
        $_SESSION['isbn'] = $GLOBALS['book']['isbn'];
    }

    function findBookByIsbn($isbn):array{
        global $conn;
        if(!empty($isbn)){
            $res = mysqli_query($conn, "SELECT * FROM book WHERE isbn = '$isbn'");
            if($res){
                return mysqli_fetch_assoc($res);
            }
            else {
                $_SESSION['error'] = "error :".mysqli_error($conn);
                return array(null);
            }
        }else{
            $_SESSION['error']= "isbn not is null";
            return array(null);
        }
    }

    function countAllBooks():int{
        global $conn;
        $req = "SELECT count(isbn) as size FROM book";

        $res = mysqli_query($conn, $req);
        $res = mysqli_fetch_assoc($res);
        return $res['size'];
    }

    function countAllAdmins():int{
    global $conn;
    $req = "SELECT count(id) as size FROM manager";

    $res = mysqli_query($conn, $req);
    $res = mysqli_fetch_assoc($res);
    return $res['size'];
}

    function countBookLessThen10():int{
        global $conn;
        $req = "SELECT count(m.isbn) as bookNeeded FROM book m WHERE m.quantity < 10";

        $res = mysqli_query($conn, $req);
        $res = mysqli_fetch_assoc($res);
        return $res['bookNeeded'];
    }

    function verifyString($str): string{
        global $conn;
        $str = stripslashes(trim($str));
        return mysqli_real_escape_string($conn, $str);
    }