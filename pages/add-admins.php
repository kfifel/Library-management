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
    <link rel="stylesheet" href="/assets/css/log-in.css">
    <title>Log in</title>
</head>
<body class="bodyAddAdmin">
<main>
    <div class="d-flex">
        <div  class="card col-5 p-3 py-2 align-content-center" id="addAdmin">
            <div class="card-body row justify-content-center">
                <h1 class="text-center">
                    <span class="text-white">Ajouter</span>
                    <span class="text-primary">Admin</span>
                </h1>
                <div class="text-center mt-5">
                    <form action="/admin/script.php" method="post" class="d-grid gap-5">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="first_name" id="first_name" placeholder="Prénom" class="form-control">
                            </div>
                            <div class="col-6">
                                <input type="text" name="last_name" id="last_name" placeholder="Nom" class="form-control">
                            </div>
                        </div>
                        <div>
                            <input type="email" name="email" id="email" placeholder="Email" onkeyup="emailValidate()" class="form-control">
                        </div>
                        <div>
                            <input type="password" name="password" id="password" placeholder="mot de passe" onkeyup="passwordValidate()" class="form-control">
                        </div>
                        <div>
                            <input type="password" name="password2" id="password2" placeholder="mot de passe" class="form-control">
                        </div>
                        <div class="d-flex justify-content-between">
                            <input type="submit" value="Connexion" name="add-admin" class="btn btn-primary">
                            <span><a href="#">Récuperer votre mot de passe</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center d-grid justify-items-center  title">
            <a href="/index.php" class="text-decoration-none">
                <h1 class=" my-5">
                    <span class="text-muted">YOU</span>
                    <span class="text-primary">BOOK</span>
                </h1>
            </a>
            <div class="mt-5">
                <img src="../assets/images/sigup.png" id="logup" alt="add admins up">
            </div>
        </div>
    </div>
</main>
<script src="../assets/js/main.js"></script>
</body>
</html>