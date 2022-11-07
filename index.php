<?php
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


    <header>
        <nav class="d-flex justify-content-around justify-items-center navbar">
            <div>
                <img src="assets/images/youbook.png"  class="logo" alt="logo">
            </div>
            <div>
                Bonjour Mr ...
            </div>
            <div>
                parametre et profil
            </div>
        </nav>
    </header>
    <main>
        <div class="row">
            <div class="col-1 row justify-items-start h-100 bg-second main-container">
                    <lord-icon
                            src="https://cdn.lordicon.com/slduhdil.json"
                            trigger="hover"
                            class="w-5 text-blue">
                    </lord-icon>
                    <lord-icon
                            src="https://cdn.lordicon.com/kipaqhoz.json"
                            trigger="morph"
                            class="fa-lg""
                    >
                    </lord-icon>
                    <lord-icon
                            src="https://cdn.lordicon.com/ofwpzftr.json"
                            trigger="hover">
                    </lord-icon>
                    <lord-icon
                            src="https://cdn.lordicon.com/hbigeisx.json"
                            trigger="hover">
                    </lord-icon>
                    <lord-icon
                            src="https://cdn.lordicon.com/osuxyevn.json"
                            trigger="hover">
                    </lord-icon>
                    <lord-icon
                            src="https://cdn.lordicon.com/hwuyodym.json"
                            trigger="hover">
                    </lord-icon>
                    <lord-icon
                            src="https://cdn.lordicon.com/diihvcfp.json"
                            trigger="hover">
                    </lord-icon>

                    <lord-icon
                            src="https://cdn.lordicon.com/wxnxiano.json"
                            trigger="morph">
                    </lord-icon>
                    <lord-icon
                            src="https://cdn.lordicon.com/jjjmlddk.json"
                            trigger="hover">
                    </lord-icon>

            </div>
            <div class="card col-11">
                <div class="card-header py-3">
                    <div class="row g-3 align-items-center">
                        <div class="col-lg-3 col-md-6 me-auto">
                            <div class="ms-auto position-relative">
                                <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                                    <i class="bi bi-search"></i>
                                </div>
                                <input class="form-control ps-5" type="text" placeholder="search produts">
                            </div>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>All category</option>
                                <option>Fashion</option>
                                <option>Electronics</option>
                                <option>Furniture</option>
                                <option>Sports</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Latest added</option>
                                <option>Cheap first</option>
                                <option>Most viewed</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="product-grid">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-3">
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/libraby2.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0"> <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div> <small>74 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a  class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0"> <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div> <small>65 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                                            <a href="javascript:;" class="btn btn-sm">
                                                <lord-icon
                                                        src="https://cdn.lordicon.com/wloilxuq.json"
                                                        trigger="hover"
                                                        colors="primary:#006cf1,secondary:#006cf1">
                                                </lord-icon>
                                            </a>
                                            <a href="javascript:;" class="btn btn-sm">
                                                <lord-icon
                                                        src="https://cdn.lordicon.com/jmkrnisz.json"
                                                        trigger="hover"
                                                        colors="primary:#DC3545"
                                                >
                                                </lord-icon>
                                                </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="card border shadow-none mb-0">
                                    <div class="card-body text-center">
                                        <img src="assets/images/library.jpg" class="img-fluid mb-3" alt="" />
                                        <h6 class="product-title">Men White Polo T-shirt</h6>
                                        <p class="product-price fs-5 mb-1"><span>$250.99</span>
                                        </p>
                                        <div class="rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                            <i class="bi bi-star-fill text-secondary"></i>
                                        </div> <small>96 Reviews</small>
                                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3"> <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.lordicon.com/qjzruarw.js"></script>
</body>
</html>
