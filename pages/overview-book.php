<?php
include '../admin/script.php';
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
    <title>YouBook</title>
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
                <div class="d-flex justify-content-between" id="header-title">
                    <h1> List des Livres</h1>
                    <button class="btn btn-outline-light rounded-5" onclick="addBookForm()" data-bs-toggle="modal" data-bs-target="#add-book">
                        <i class="bi bi-plus-circle"></i>
                        Ajouter livres
                    </button>
                </div>
            </div>
            <div class="px-5">
                <?php if(!empty($_SESSION['message'])):?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?=$_SESSION['message']?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                    endif;
                    if(!empty($_SESSION['error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?=$_SESSION['error']?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif;
                unset($_SESSION['message']);
                unset($_SESSION['error']);
                ?>
            </div>
            <div class="card-body px-5">
                <div class="">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-5">
                        <?php
                            global $books;
                        foreach ($books as $book){
                        ?>
                        <div class="col mb-4">
                            <div class="card" style="height: 70vh;">
                                <div class="card-head text-center">
                                    <section class="d-flex justify-content-around flex-wrap gap-3 overflow-hidden my-3">
                                        <img src="/assets/images/book/<?=$book['img']?>" class="img-fluid mb-3 rounded-2 book-photo" alt="photo livres"/>
                                    </section>
                                    <h6 class="product-title"><?=$book['title']?></h6>
                                    <div class="d-flex align-items-center justify-content-center gap-2 mt-3 bg-white rounded-2">
                                        <h1 class="
                                            <?php
                                                if($book['quantity']<=5 && $book['quantity'] >= 0) echo 'text-danger';
                                                if($book['quantity']<=10 && $book['quantity'] >= 6) echo 'text-warning';
                                                if($book['quantity']>10) echo 'text-success';
                                            ?>">
                                            <?=$book['quantity']?>
                                        </h1>
                                        <a href="./overview-book.php?isbn=<?=$book['isbn']?>" class="btn btn-sm">
                                            <lord-icon
                                                    src="https://cdn.lordicon.com/wloilxuq.json"
                                                    trigger="hover"
                                                    colors="primary:#006cf1,secondary:#006cf1">
                                            </lord-icon>
                                        </a>
                                        <a href="overview-book.php?d_isbn=<?=$book['isbn']?>" class="btn btn-sm">
                                            <lord-icon
                                                    src="https://cdn.lordicon.com/jmkrnisz.json"
                                                    trigger="hover"
                                                    colors="primary:#DC3545"
                                            >
                                            </lord-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        ?>
                    </div>
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


<div class="modal fade" id="add-book" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="headerH5">ajouter livre</h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close" id="closePopup">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <div id="alertAdd">

                </div>
                <form id="form" class="" action="../admin/script.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="isbn" class="col-form-label">isbn</label>
                        <input type="text" id="isbn" name="isbn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">titre:</label>
                        <input type="text" class="form-control" name="title" id="title"  placeholder="title" required>
                        <div class="valid-feedback">
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="n_page" class="col-form-label">nombre des pages:</label>
                        <input type="number" id="n_page" name="n_page" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="col-form-label">quantité:</label>
                        <input type="number" id="quantity" name="quantity" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="img" class="col-form-label">image:</label>
                        <input type="file" id="img" name="img" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Description" class="col-form-label">Description:</label>
                        <textarea class="form-control" name="description" id="Description" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="close">Cancel</button>
                        <button type="submit" name="add-book" class="btn btn-success" id="submit"  >Enregestrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.lordicon.com/qjzruarw.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="../assets/js/main.js"></script>

<?php
if(isset($_GET['isbn'])){
    editBook($_GET['isbn']);
    ?>
    <script>
        document.querySelector('#header-title button').click();
        document.getElementById('headerH5').innerText= "modifier livre";
        document.getElementById("submit").setAttribute("name", "update-book");
        document.getElementById("submit").innerText= "Modifier";
        document.getElementById('img').removeAttribute('required');

        document.getElementById('isbn').value = "<?=$GLOBALS['book']['isbn']?>";
        document.getElementById('title').value = "<?=$GLOBALS['book']['title']?>";
        document.getElementById('n_page').value = "<?=$GLOBALS['book']['n_page']?>";
        document.getElementById('quantity').value = "<?=$GLOBALS['book']['quantity']?>";
        document.getElementById('Description').value = "<?=$GLOBALS['book']['description']?>";
    </script>
    <?php
}
?>
</body>
</html>

