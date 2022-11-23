<?php
session_start();
if(!isset($_SESSION['id_admin'])){
    header('Location: /pages/login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Log in</title>
</head>
<body>

<?php  include '../include/header.php'; ?>
<main>
    <div class="main-container d-flex">
        <div class="mt-10 col-1" id="side_bar">
            <?php include '../include/sidebar.php' ?>
        </div>
        <div class=" col-11 ml-8 mt-10">
            <div class="card-header p-3 text-white">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">livres</li>
                    <li class="breadcrumb-item breadcrumb-active">Apreçu</li>
                </ul>
                <div class="d-flex justify-content-center" id="header-title">
                    <h1> ajouter admin</h1>
                </div>
            </div>
            <div class="card-body px-3 d-flex justify-content-center">
                <div class="col-sm-12 col-md-9 col-lg-7">
                    <div class="">
                        <?php if(!empty($_SESSION['message'])):?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <b>Success: </b><?=$_SESSION['message']?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                            unset($_SESSION['message']);
                            endif;
                        if(!empty($_SESSION['error'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <b>Ereur: </b><?=$_SESSION['error']?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                            unset($_SESSION['error']);
                            endif;
                        ?>
                    </div>
                    <form action="/admin/script.php" method="post">
                        <div class="d-grid gap-2">
                            <div class="row">
                                <div class="col-6">
                                    <label for="first_name" class="text-white">Prénom:</label>
                                    <input type="text" name="first_name" id="first_name" value="<?=@$_SESSION['first_name']; unset($_SESSION['first_name']);?>" placeholder="Prénom" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label for="last_name" class="text-white">Nom:</label>
                                    <input type="text" name="last_name" id="last_name" value="<?=@$_SESSION['last_name']; unset($_SESSION['last_name']);?>"  placeholder="Nom" class="form-control">
                                </div>
                            </div>
                            <div>
                                <label for="email" class="text-white">Email:</label>
                                <input type="email" name="email" id="email" value="<?=@$_SESSION['emailNv']; unset($_SESSION['emailNv']);?>"  placeholder="Email" onkeyup="emailValidate()" class="form-control">
                            </div>
                            <div>
                                <label for="password" class="text-white">mot de passe:</label>
                                <input type="password" name="password" id="password" placeholder="mot de passe" onkeyup="passwordValidate()" class="form-control">
                            </div>
                            <div>
                                <label for="password2" class="text-white">Confirmer le mot de passe:</label>
                                <input type="password" name="password2" id="password2" placeholder="Confirmer le mot de passe" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between my-4">
                            <input type="submit" value="Ajouter" name="add-admin" class="btn btn-primary form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php
    include '../include/footer.php';
    ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.lordicon.com/qjzruarw.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>