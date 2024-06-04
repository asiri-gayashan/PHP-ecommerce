<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- ----------------------------------------------------------------- bootstrap icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- ----------------------------------------------------------------- bootstrap icons  -->

    <!-- ----------------------------------------------------------------- bootstrap Style  -->
    <link rel="stylesheet" href="./bootstrap.css">
    <!-- ----------------------------------------------------------------- bootstrap Style  -->
    <!-- ----------------------------------------------------------------- bootstrap icons  -->
    <link rel="stylesheet" href="./bootstrap.min.css">
    <!-- ----------------------------------------------------------------- bootstrap icons  -->

    <!-- ----------------------------------------------------------------- Local Style  -->
    <link rel="stylesheet" href="./style.css">
    <!-- ----------------------------------------------------------------- Local Style  -->

    <title>Users | New Tech</title>
</head>

<body>

    <div class="container-fluid">


        <?php
        include "headerTop.php";
        ?>


        <?php
        include "headermiddle.php"
        ?>




        <div class="row px-4 px-lg-5 sticky-top bg-white l-src-top py-2  mb-4">
            <div class="col-12">
                <div class="row">
                    <div class="col-4  d-none d-sm-flex align-items-center ">

                        <span class="breadcrumb-item">Home</span>
                        <span class="breadcrumb-item active">Laptops</span>


                    </div>

                    <div class="col-12 col-sm-8">
                        <div class="row">
                            <div class="col-9 col-md-6 offset-md-4 d-flex align-items-center justify-content-start justify-content-lg-end ">


                                <span class="l-filter-text   me-2">SORT BY</span>
                                <select name="" id="" class="l-search-select py-2 px-2">
                                    <option value="" class="l-sch-option py-2">ACCENDING</option>
                                    <option value="" class="l-sch-option py-2">DECCENDING</option>
                                </select>
                            </div>
                            <div class="col-2 d-flex   justify-content-lg-end">
                                <label class="btn  me-1 l-model-btn"><i class="bi bi-grid-fill"></i></label>
                                <label class="btn   l-model-btn"><i class="bi bi-list-ul"></i></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="row mt-5 mb-5 my-5 px-1 px-md-5">
            <div class="col-12 ">
                <div class="row ">




                    <div class="col-12 mb-3">
                        <label class="l-head-title fs-4 fw-bold">Manage Users</label>
                    </div>


                    <div class="col-12 col-lg-6 mb-2">
                        <div class="row l-side-card g-0 py-3 px-2 mb-1 mb-lg-3 d-flex ">
                            <div class="col-12 col-lg-6 d-flex align-items-center mb-2">
                                <img src="./Images/bookbackground.jpg" class="img-fluid w-25 me-3 rounded-start" alt="...">
                                <div class="col d-block overflow-hidden">
                                    <label class="l-side-card-title  ">Asiri Gayashan</label>
                                    <h5 class="l-para2  ">@asirigaya</h5>
                                </div>
                                <div class=" d-md-none d-flex align-items-baseline">
                                    <a class="btn l-model-btn me-1 bx-sh-none" href="./updateProducts.php"><i class="bi bi-pencil-square "></i></a>
                                    <a class="btn l-model-btn me-1 bx-sh-none "><i class="bi bi-toggle2-on"></i></a>
                                    <a class="btn l-model-btn bx-sh-none"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 ps-2 my-2  d-flex d-md-none align-items-center  ">
                                <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Trending</label>
                                <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Level 3</label>
                            </div>

                            <div class="col-4 col-lg-2 ps-2 d-flex align-items-center ">
                                <label class="l-side-card-title  overflow-hidden">Rs 10000</label>
                            </div>
                            <div class="col-4 col-lg-2 ps-3 pe-2 d-flex align-items-center overflow-hidden  d-grid">
                                <label class="l-side-card-title  ">26 Sold</label>
                            </div>
                            <div class="col-3 col-lg-2 ps-4 d-flex align-items-center ">
                                <i class="bi bi-star-fill l-ratings me-1"></i>
                                <span class="l-ratings"> 4.8</span>
                            </div>


                            <div class="col-6 ps-2 my-2  d-none d-md-flex align-items-center  ">
                                <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Sinhala</label>
                                <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free Delivery</label>
                                <label class="l-para2 text-white bg-primary py-0 px-1 me-1 rounded">In Stock</label>

                            </div>
                            <div class=" col-6 d-none d-lg-flex justify-content-end">

                                <a class="btn l-model-btn me-1 bx-sh-none" href="./updateProducts.php"><i class="bi bi-pencil-square "></i></a>
                                <a class="btn l-model-btn me-1 bx-sh-none "><i class="bi bi-toggle2-on"></i></a>
                                <a class="btn l-model-btn bx-sh-none"><i class="bi bi-trash-fill"></i></a>

                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-lg-6 mb-2">
                        <div class="row l-side-card g-0 py-3 px-2 mb-1 mb-lg-3 d-flex ">
                            <div class="col-12 col-lg-6 d-flex align-items-center mb-2">
                                <img src="./Images/bookbackground.jpg" class="img-fluid w-25 me-3 rounded-start" alt="...">
                                <div class="col d-block overflow-hidden">
                                    <label class="l-side-card-title  ">Asiri Gayashan</label>
                                    <h5 class="l-para2  ">@asirigaya</h5>
                                </div>
                                <div class=" d-md-none d-flex align-items-baseline">
                                    <a class="btn l-model-btn me-1 bx-sh-none" href="./updateProducts.php"><i class="bi bi-pencil-square "></i></a>
                                    <a class="btn l-model-btn me-1 bx-sh-none "><i class="bi bi-toggle2-on"></i></a>
                                    <a class="btn l-model-btn bx-sh-none"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 ps-2 my-2  d-flex d-md-none align-items-center  ">
                                <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Trending</label>
                                <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Level 3</label>
                            </div>

                            <div class="col-4 col-lg-2 ps-2 d-flex align-items-center ">
                                <label class="l-side-card-title  overflow-hidden">Rs 10000</label>
                            </div>
                            <div class="col-4 col-lg-2 ps-3 pe-2 d-flex align-items-center overflow-hidden  d-grid">
                                <label class="l-side-card-title  ">26 Sold</label>
                            </div>
                            <div class="col-3 col-lg-2 ps-4 d-flex align-items-center ">
                                <i class="bi bi-star-fill l-ratings me-1"></i>
                                <span class="l-ratings"> 4.8</span>
                            </div>


                            <div class="col-6 ps-2 my-2  d-none d-md-flex align-items-center  ">
                                <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Sinhala</label>
                                <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free Delivery</label>
                                <label class="l-para2 text-white bg-primary py-0 px-1 me-1 rounded">In Stock</label>

                            </div>
                            <div class=" col-6 d-none d-lg-flex justify-content-end">

                                <a class="btn l-model-btn me-1 bx-sh-none" href="./updateProducts.php"><i class="bi bi-pencil-square "></i></a>
                                <a class="btn l-model-btn me-1 bx-sh-none "><i class="bi bi-toggle2-on"></i></a>
                                <a class="btn l-model-btn bx-sh-none"><i class="bi bi-trash-fill"></i></a>

                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-lg-6 mb-2">
                        <div class="row l-side-card g-0 py-3 px-2 mb-1 mb-lg-3 d-flex ">
                            <div class="col-12 col-lg-6 d-flex align-items-center mb-2">
                                <img src="./Images/bookbackground.jpg" class="img-fluid w-25 me-3 rounded-start" alt="...">
                                <div class="col d-block overflow-hidden">
                                    <label class="l-side-card-title  ">Asiri Gayashan</label>
                                    <h5 class="l-para2  ">@asirigaya</h5>
                                </div>
                                <div class=" d-md-none d-flex align-items-baseline">
                                    <a class="btn l-model-btn me-1 bx-sh-none" href="./updateProducts.php"><i class="bi bi-pencil-square "></i></a>
                                    <a class="btn l-model-btn me-1 bx-sh-none "><i class="bi bi-toggle2-on"></i></a>
                                    <a class="btn l-model-btn bx-sh-none"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 ps-2 my-2  d-flex d-md-none align-items-center  ">
                                <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Trending</label>
                                <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Level 3</label>
                            </div>

                            <div class="col-4 col-lg-2 ps-2 d-flex align-items-center ">
                                <label class="l-side-card-title  overflow-hidden">Rs 10000</label>
                            </div>
                            <div class="col-4 col-lg-2 ps-3 pe-2 d-flex align-items-center overflow-hidden  d-grid">
                                <label class="l-side-card-title  ">26 Sold</label>
                            </div>
                            <div class="col-3 col-lg-2 ps-4 d-flex align-items-center ">
                                <i class="bi bi-star-fill l-ratings me-1"></i>
                                <span class="l-ratings"> 4.8</span>
                            </div>


                            <div class="col-6 ps-2 my-2  d-none d-md-flex align-items-center  ">
                                <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Sinhala</label>
                                <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free Delivery</label>
                                <label class="l-para2 text-white bg-primary py-0 px-1 me-1 rounded">In Stock</label>

                            </div>
                            <div class=" col-6 d-none d-lg-flex justify-content-end">

                                <a class="btn l-model-btn me-1 bx-sh-none" href="./updateProducts.php"><i class="bi bi-pencil-square "></i></a>
                                <a class="btn l-model-btn me-1 bx-sh-none "><i class="bi bi-toggle2-on"></i></a>
                                <a class="btn l-model-btn bx-sh-none"><i class="bi bi-trash-fill"></i></a>

                            </div>
                        </div>
                    </div>



 




                </div>
            </div>


            <div class="col-12">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <span class="btn l-model-btn bg-warning me-1 "><i class="bi bi-caret-left-fill"></i></span>
                        <span class="btn l-model-btn bg-light btn-outline-warning me-1 text-black ">1</span>
                        <span class="btn l-model-btn bg-light btn-outline-warning me-1 text-black">2</span>
                        <span class="btn l-model-btn bg-light btn-outline-warning me-1 text-black">3</span>
                        <span class="btn l-model-btn bg-warning me-1 "><i class="bi bi-caret-right-fill"></i></span>
                    </div>

                </div>
            </div>
        </div>


        <?php

        include "footer.php"

        ?>


    </div>






    <script src="./bootstrap.bundle.js"></script>
    <script src="./bootstrap.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>