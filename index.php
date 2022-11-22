<?php
    include './admin/script.php';
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
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>YouBook</title>
</head>
<body>

<?php  include './include/header.php'; ?>
<main>
    <div class="main-container d-flex">
        <div class="mt-10 col-1" id="side_bar">
            <?php include './include/sidebar.php' ?>
        </div>
        <div class=" col-11 mt-10">
            <div class="card-header p-3 text-white">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">library</li>
                    <li class="breadcrumb-item breadcrumb-active">Acueil</li>
                </ul>
            </div>
            <div class="card-body p-5">
                <div class="">
                    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
                        <div class="col">
                            <div class="text-white text-center">
                                <div class="h1"><?=countAllBooks()?></div>
                                <i class="bi bi-book fa-5x text-primary"></i>
                                <div class="h3">nombre des livres</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-white text-center">
                                <div class="h1"><?=countBookReturnedBackToday()?></div>
                                <i class="bi bi-journal-plus fa-5x text-primary"></i>
                                <div class="h3">livres retournants Aujourd'huit</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-white text-center">
                                <div class="h1"><?=countAllAdmins()?></div>
                                <i class="bi bi-person-lines-fill fa-5x text-primary"></i>
                                <i class="bi bi-person-gear"></i>
                                <div class="h3">nombre d'admins</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-white text-center">
                                <div class="h1"><?=countBookLessThen10()?></div>
                                <i class="bi bi-journal-minus fa-5x text-primary"></i>
                                <div class="h3">Livres ont Qte < 10 </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-white text-center">
                                <div class="h1"><?=countBookLends()?></div>
                                <i class="bi bi-journal-minus fa-5x text-primary"></i>
                                <div class="h3">Livres sortant</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php
    include './include/footer.php';
    ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.lordicon.com/qjzruarw.js"></script>
</body>
</html>
