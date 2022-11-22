<?php
    include('database/dbConnexion.php');

    $books = array();
    getAllBooks();

    if(isset($_POST['log-in']))         login();
    if(isset($_GET['log-out']))         logOut();
    if(isset($_POST['add-book']))       createBook();
    if(isset($_POST['update-book']))    updateBook();
    if(isset($_GET['d_isbn']))          deleteBook();
    if(isset($_POST['add-admin']))      createAdmin();
    if(isset($_POST['modifier-admin'])) updateAdmin();


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
        if(!is_numeric($book['quantity'] ) || !is_numeric($book['n_page'])){
            $_SESSION['error'] = "quantitie et nombre des pages doit être des nombres";
            header("Location: ../pages/overview-book.php");
        }
        $req = "INSERT INTO book 
                    (isbn, title, n_page, quantity, description, img) value 
                    (?, ?, ?, ?, ?, ?)";
        $res = $conn->prepare($req);
        $res->bind_param("ssiiss", $book['isbn'], $book['title'], $book['n_page'], $book['quantity'], $book['description'], $book['photo']);
        $res = $res->execute();
        if($res) {
            $_SESSION['message'] = "bien enregistrer";
            header("Location: ../pages/overview-book.php");
        }
        else
            $_SESSION['error'] = mysqli_error($conn);
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

        $req1 = "SELECT * FROM manager WHERE email = '$email'";
        $result1 = mysqli_query($conn, $req1);

        if(mysqli_num_rows($result1) === 0){
            $_SESSION['error'] = "Email n'existe pas!!";
        }else{
            $req2 = "SELECT * FROM manager WHERE email = '$email' and password='" . hash('sha256', $password) . "'";
            $result2 = mysqli_query($conn, $req2);
            $rows2 = mysqli_fetch_assoc($result2);

            if ( mysqli_num_rows($result2) > 0) {
                $_SESSION['id_admin']  = $rows2['id'];
                $_SESSION['first_name_admin'] = $rows2['first_name'];
                $_SESSION['last_name_admin']  = $rows2['last_name'];
                $_SESSION['email']  = $rows2['email'];
                header("Location: /index.php");
            } else {
                $_SESSION['error'] = "mot de passe est incorrect.";
            }
        }
        header("Location: /pages/login.php");
    }

    function createAdmin():void{
        if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name'])){
            global $conn;
            $email = verifyString($_POST['email']);
            $password = verifyString($_POST['password']);
            $password2 = verifyString($_POST['password2']);
            $first_name = verifyString($_POST['first_name']);
            $last_name = verifyString($_POST['last_name']);
            if($password != $password2){
                $_SESSION['error'] = "les mot de passes n'est pas similaire ";
                $_SESSION['emailNv'] = $email;
                $_SESSION['first_name'] = $first_name;
                $_SESSION['last_name'] = $last_name;
                header("Location:  ../../pages/add-admins.php");
            }else{
                $req = "INSERT INTO manager VALUE (null, '$first_name', '$last_name', '$email','".hash('sha256', $password)."')";
                $res = mysqli_query($conn, $req);
                if($res){
                    $_SESSION['message'] = "bien enregistrer ";
                }
                else{
                    $_SESSION['error'] = "erreur d'enregistrement :".mysqli_error($conn);
                }
            }
        }else{
            $_SESSION['error'] = "il faut remplir touts les champs ";
        }
        header('Location: ../../pages/add-admins.php');

    }

    function updateAdmin():void
    {
        global $conn;
        if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) ){
            $first_name = verifyString( $_POST['first_name'] );
            $last_name = verifyString( $_POST['last_name'] );
            $email = verifyString( $_POST['email'] );
            $currentPassword = verifyString( $_POST['currentPassword'] );
            $password = verifyString( $_POST['password'] );
            $password2 = verifyString( $_POST['password2'] );
            $id_admin = $_SESSION['id_admin'];
            if($password === ''){
                $req = "UPDATE manager set first_name = '$first_name', last_name = '$last_name', email = '$email'
                where id = $id_admin";
                $res = mysqli_query($conn, $req);
                if($res){
                    $_SESSION['message'] = "votre informations est bien enregistrer";
                    $_SESSION['first_name_admin'] = $first_name;
                    $_SESSION['last_name_admin']  = $last_name;
                    $_SESSION['email']  = $email;
                }
                else
                    $_SESSION['error'] = " some thing's was wrong :(";
            }else{
                if($password === $password2){
                    if(verifyPasswordAdmin(hash("sha256", $currentPassword))){
                        $password = hash('sha256', $password);
                        $req = "UPDATE manager set first_name = '$first_name', last_name = '$last_name', email = '$email', password = '$password'
                        where id = $id_admin";
                        $res = mysqli_query($conn, $req);
                        if($res)
                            $_SESSION['message'] = " Votre informations est bien enregistrer";
                        else
                            $_SESSION['error'] = " some thing's was wrong :(";
                    }else{
                        $_SESSION['error'] = " current password is wrong :(";
                    }
                }else{
                    $_SESSION['error'] = "mot de passes n'est pas similaire ";
                }
            }
        }else{
            $_SESSION['error'] = " Essayez de remplir touts les chaps  :(";
        }
    header("Location: ../pages/settings.php");
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
            if($fileActualExt != '') $_SESSION['error'] = "Extension $fileActualExt: is not allowed here";
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

    function countBookLends():int{
        global $conn;
        $req = "SELECT count(id_reader) as id_reader FROM lend";

        $res = mysqli_query($conn, $req);
        $res = mysqli_fetch_assoc($res);
        return $res['id_reader'];
    }

    function countBookReturnedBackToday():int{
        global $conn;
        $req = "SELECT count(id_reader) as id_reader FROM lend WHERE return_date = '".date('Y-m-d')."'";

        $res = mysqli_query($conn, $req);
        $res = mysqli_fetch_assoc($res);
        return $res['id_reader'];
    }

    function verifyPasswordAdmin($password):int{
        global $conn;
        $res = mysqli_query($conn, "SELECT id FROM manager WHERE password = '$password' AND id = ".$_SESSION['id_admin']);
        return mysqli_num_rows($res);
    }

    function verifyString($str): string{
        global $conn;
        $str = stripslashes(trim($str));
        return mysqli_real_escape_string($conn, $str);
    }