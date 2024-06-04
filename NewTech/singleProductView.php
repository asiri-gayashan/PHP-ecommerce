<?php

session_start();



if (isset($_GET["id"])) {

    $prID = $_GET["id"];
    require "connection.php";

    if (isset($_SESSION["u"])) {
        $userEmail = $_SESSION["u"]["email"];

    }



?>




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

    <title>Items | New Tech</title>
</head>

<body>

    <div class="container-fluid">

        <!-- ---------------------------------------------------------------------------------------------Header Top   -->

        <?php
    include "headerTop.php";
    include "headermiddle.php";




        ?>

        <!-- ---------------------------------------------------------------------------------------------Header Top   -->


        <!-- ---------------------------------------------------------------------------------------------Singl product view   -->

        <div class="row mt-5">

            <div class="col-12 col-md-6">
                <div class="row  px-3 px-lg-3">
                    <div class="col-12 px-lg-5 py-4">
                        <img src="./Images/bookbackground.jpg" class="w-100" alt="">
                    </div>
                    <hr>
                    <div class="col-12 py-3">
                        <div class="row g-2 ">
                            <div class="col">
                                <button class=" col-12 l-single-images  py-3 ">
                                    <img src="./Images/bookbackground.jpg" class="w-75" alt="">
                                </button>
                            </div>
                            <div class="col">
                                <button class=" col-12 l-single-images  py-3 ">
                                    <img src="./Product_Images/macbook2.png" class="w-75" alt="">
                                </button>
                            </div>
                            <div class="col">
                                <button class=" col-12 l-single-images  py-3 ">
                                    <img src="./Product_Images/macbook2.png" class="w-75" alt="">
                                </button>
                            </div>
                            <div class="col">
                                <button class=" col-12 l-single-images  py-3 ">
                                    <img src="./Product_Images/Iphone.png" class="w-75" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 px-3 pt-5 px-lg-5">
                <div class="row">

                    <?php

    $prRS = Database::search("SELECT * FROM `product` WHERE `id` = '" . $prID . "'");
    $prData = $prRS->fetch_assoc();



                    ?>


                    <div class="col-12">
                        <label class="">Fantacy</label>
                    </div>
                    <div class="col-12 mt-2  align-items-center ">
                        <label class="l-head-title fs-4 fw-bold ">
                            <?php echo $prData["title"]; ?>
                        </label>

                        <?php

    if ($prData["qty"] == 0) {

                        ?>

                        <label class="l-para2 text-white bg-black py-1 px-2 ms-4 rounded">Out of Stock</label>



                        <?php

    } else {


                        ?>

                        <label class="l-para2 text-white bg-warning py-1 px-2 ms-4 rounded">In Stock</label>



                        <?php


    }


                        ?>


                    </div>
                    <div class="col-12 ">
                        <label class="l-single-description fw-bold me-2 ">
                            <?php echo $prData["author"]; ?>
                        </label>
                        |
                        <label class="l-single-description  ">
                            <?php echo $prData["year"]; ?>
                        </label>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="row">
                            <div class="col-6">
                                <span class="fw-bold l-para me-2"><del>Rs
                                        <?php echo $prData["startprice"]; ?>
                                    </del></span>
                                <span class="fs-5 text-danger fw-bold">Rs
                                    <?php echo $prData["buyNow"]; ?>
                                </span>
                            </div>
                            <div class="col-6 text-end">
                                <i class="bi bi-star-fill me-1 l-ratings"></i>
                                <i class="bi bi-star-fill me-1 l-ratings"></i>
                                <i class="bi bi-star-fill me-1 l-ratings"></i>
                                <i class="bi bi-star-fill me-1 l-ratings"></i>
                                <i class="bi bi-star-half me-1 l-ratings"></i>
                                <span class="l-ratings">(136)</span>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-2">

                    <div class="col-12">
                        <p class="l-single-description">
                            <?php echo $prData["description"]; ?>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur nostrum, veritatis
                            molestias sit natus eaque laboriosam cum enim ducimus ipsa unde sequi! Earum ut atque
                            asperiores eaque ipsum vel dignissimos
                        </p>
                    </div>
                    <div class="col-6 mt-2">
                        <label class="l-card-title fw-bolder me-3">ISBN 10</label>
                        <label class="l-card-title fw-bolder me-3">
                            <?php echo $prData["isbn_10"]; ?>
                        </label>

                    </div>
                    <div class="col-6 mt-2">
                        <label class="l-card-title fw-bolder me-3">ISBN 13</label>
                        <label class="l-card-title fw-bolder me-3">
                            <?php

    if (empty($prData["isbn_13"])) {
        echo "xxxxxxxxxxxxx";
    } else {

        echo $prData["isbn_13"];
    }

                            ?>
                        </label>

                    </div>
                    <div class="col-12 mt-3">
                        <label class="l-card-title fw-bolder me-3">Language</label>

                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center me-4 mt-2">
                                <input type="checkbox" class="l-check-input me-2">
                                <span class="l-filter-text">Sinhala</span>
                            </div>
                            <div class="d-flex align-items-center me-4 mt-2">
                                <input type="checkbox" class="l-check-input me-2" checked>
                                <span class="l-filter-text">English</span>
                            </div>
                            <div class="d-flex align-items-center me-4 mt-2">
                                <input type="checkbox" class="l-check-input me-2">
                                <span class="l-filter-text">Tamil</span>
                            </div>

                        </div>

                    </div>
                    <div class="col-12 mt-3">

                        <label class="l-card-title fw-bolder me-3">Quantity </label>

                        <button class="btn  l-qty-btn" onclick="qtyChange('down' , <?php echo $prData["qty"]; ?>);"><i
                                class="bi bi-caret-down-fill"></i></button>
                        <input type="text" class=" mt-1 l-qty  text-end px-3 l-sign-input" value="1" id="qty" disabled>
                        <button class="btn l-qty-btn" onclick="qtyChange('up' , <?php echo $prData["qty"]; ?>);"><i
                                class="bi bi-caret-up-fill"></i></button>
                    </div>
                    <div class="col-12 mt-4">

                        <?php

    if (isset($_SESSION["u"])) {

        if($prData["qty"] == 0){

            ?>


            <a class="btn l-dark-btn text-white px-5 py-2 me-2"> <i
                    class="bi bi-cart3 me-3"></i>
                Out of Stocks</a>




            <?php

        }else{



            ?>


            <a class="btn l-dark-btn text-white px-5 py-2 me-2"
                onclick="addToCart(<?php echo $prID; ?>, '<?php echo $userEmail; ?>');"> <i
                    class="bi bi-cart3 me-3"></i>
                Add to cart </a>




            <?php



        }

                       



    } else {

                        ?>


                        <a class="btn l-dark-btn text-white px-5 py-2 me-2"
                            onclick='alert("You need to login first"); window.location = "signin.php?user=login";'> <i
                                class="bi bi-cart3 me-3"></i>
                            Add to cart </a>

                        <?php


    }


                        ?>














                        <?php


    if (isset($_SESSION["u"])) {

        $wishRS = Database::search("SELECT * FROM `wishlist` WHERE `product_id` = '" . $prID . "' AND `user_email` = '" . $userEmail . "'");
        $wishNR = $wishRS->num_rows;



        if ($wishNR == '1') {


                        ?>

                        <a class="btn btn-danger  py-2   "
                            onclick="addwishlist(<?php echo $prID; ?>, '<?php echo $userEmail; ?>');"><i
                                class="bi bi-heart"></i></a>


                        <?php



        } else {

                        ?>

                        <a class="btn btn-outline-danger  py-2   "
                            onclick="addwishlist(<?php echo $prID; ?>, '<?php echo $userEmail; ?>');"><i
                                class="bi bi-heart"></i></a>


                        <?php


        }






    } else {


                        ?>

                        <a class="btn btn-outline-danger py-2 l-btn-heart"
                            onclick='alert("You need to login first"); window.location = "signin.php?user=login";'>
                            <i class="bi bi-heart"></i>
                        </a>


                        <?php


    }



                        ?>


                    </div>



                </div>
            </div>

        </div>

        <!-- ---------------------------------------------------------------------------------------------Singl product view   -->

        <!-- ---------------------------------------------------------------------------------------------Description   -->

        <div class="row my-5 px-0 px-lg-5">
            <div class="col-12">

                <div class="row">

                    <div class="col-12">
                        <div class="row d-flex align-items-center">
                            <div class="col-9 ">
                                <label class="l-head-title fs-4 fw-bold">Reviews & Ratings</label>
                            </div>
                            <div class="col-3 d-flex justify-content-end">
                                <label class="btn bg-warning text-black  l-model-btn me-2" data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample"><i class="bi bi-plus fs-5"></i></label>
                            </div>

                            <div class="col-12 ">

                                <div class="collapse" id="collapseExample">

                                    <div class="col-12 col-lg-6 offset-lg-3  mt-3 mb-2">
                                        <div class="row l-side-card bg-white   g-0 py-3 pb-4 px-2  mb-lg-2 d-flex ">

                                            <div class="col-12 reviewbody mt-2 px-3 px-lg-5" id="">
                                                <div class=" col-12 mt-2 ">
                                                    <h5 class="l-card-title p-0 m-0 ">Email</h5>


                                                    <?php

    if (isset($_SESSION["u"])) {



                                                    ?>

                                                    <input type="text" id="commEmail" disabled
                                                        class="form-control mt-1 bg-light  l-sign-input"
                                                        value="<?php echo $userEmail; ?>">




                                                    <?php


    } else {


                                                    ?>
                                                    <input type="text" id="commEmail" disabled
                                                        class="form-control mt-1 bg-light  l-sign-input" value="">

                                                    <?php


    }


                                                    ?>





                                                </div>
                                                <div class=" col-12 mt-3 ">
                                                    <h5 class="l-card-title p-0 m-0 ">Comment</h5>
                                                    <textarea name="" class="form-control mt-1 bg-light  l-sign-input"
                                                        id="comText" cols="30" rows="7"></textarea>

                                                </div>

                                                <div class="col-12 mt-3">

                                                    <div class="row">

                                                        <div class=" col-1    ">
                                                            <img src="./Images/user.png" class="rounded-circle" alt=""
                                                                style="width: 40px; ">
                                                        </div>

                                                        <div class=" col-8  col-md-5 ps-5 ps-md-4 ">
                                                            <h5 class="l-card-title p-0 m-0 ">

                                                                <?php

    if (isset($_SESSION["u"])) {
        echo $_SESSION["u"]["fname"] . " " . $_SESSION["u"]["lname"];

    } else {
        echo "Unknown User";
    }

                                                                ?>
                                                          

                                                            </h5>
                                                            <label class="l-para2">User</label> <br>
                                                        </div>

                                                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-end">
                                                            <i class="bi bi-star me-1  fs-5 l-ratings" id="r1"
                                                                onclick="addRatings('1');"></i>
                                                            <i class="bi bi-star me-1  fs-5 l-ratings" id="r2"
                                                                onclick="addRatings('2');"></i>
                                                            <i class="bi bi-star  me-1  fs-5 l-ratings" id="r3"
                                                                onclick="addRatings('3');"></i>
                                                            <i class="bi bi-star me-1  fs-5 l-ratings" id="r4"
                                                                onclick="addRatings('4');"></i>
                                                            <i class="bi bi-star me-1  fs-5 l-ratings" id="r5"
                                                                onclick="addRatings('5');"></i>


                                                            <?php

    if (isset($_SESSION["u"])) {

                                                            ?>
                                                            <label class="btn text-black bg-warning  l-model-btn ms-2"
                                                                onclick="addComment(<?php echo $prID ?>);">Comment</label>

                                                            <?php


    } else {


                                                            ?>

                                                            <label class="btn text-black bg-warning  l-model-btn ms-2"
                                                                onclick='alert("You need to login first"); window.location = "signin.php?user=login";'>Comment</label>


                                                            <?php



    }


                                                            ?>





                                                        </div>


                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-12">

                        <div class="row bg-light  mt-3 py-4 px-2 px-lg-5 overflow-auto" style="height: 400px;">







                            <div class="col-12 col-lg-6  mb-2">
                                <div class="row l-side-card bg-white   g-0 py-3 px-2  mb-lg-2 d-flex ">
                                    <div class="col-12     l-reviewHead px-3 px-lg-5">

                                        <div class="row">

                                            <div class=" col-1    ">
                                                <img src="./Images/Dhanika-Perera.png" class="rounded-circle" alt=""
                                                    style="width: 40px; ">
                                            </div>

                                            <div class=" col-8  col-md-6 ps-5 ps-md-4 ">
                                                <h5 class="l-card-title p-0 m-0 ">Asiri Gayashan</h5>
                                                <label class="l-para2">02 Dec 2001</label> <br>
                                            </div>

                                            <div class="col-3 col-md-5 d-flex align-items-center justify-content-end">
                                                <i class="bi bi-star-fill me-1 fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 d-none d-lg-flex fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 d-none d-lg-flex fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 fs-6 l-ratings"></i>
                                                <i class="bi bi-star-half me-1 fs-6 l-ratings"></i>
                                                <i class="bi ms-3 bi-heart-fill text-danger"></i>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-12 reviewbody mt-2 px-3 px-lg-5">
                                        <p class="l-para2">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magnam
                                            necessitatibus ratione laborum, animi
                                            possimus aliquam quisquam modi unde doloremque dignissimos enim omnis
                                            consequuntur repellat dolore voluptas
                                            earum numquam. Ullam.
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-lg-6  mb-2">
                                <div class="row l-side-card bg-white   g-0 py-3 px-2  mb-lg-2 d-flex ">
                                    <div class="col-12     l-reviewHead px-3 px-lg-5">

                                        <div class="row">

                                            <div class=" col-1    ">
                                                <img src="./Images/Dhanika-Perera.png" class="rounded-circle" alt=""
                                                    style="width: 40px; ">
                                            </div>

                                            <div class=" col-8  col-md-6 ps-5 ps-md-4 ">
                                                <h5 class="l-card-title p-0 m-0 ">Asiri Gayashan</h5>
                                                <label class="l-para2">02 Dec 2001</label> <br>
                                            </div>

                                            <div class="col-3 col-md-5 d-flex align-items-center justify-content-end">
                                                <i class="bi bi-star-fill me-1 fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 d-none d-lg-flex fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 d-none d-lg-flex fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 fs-6 l-ratings"></i>
                                                <i class="bi bi-star-half me-1 fs-6 l-ratings"></i>
                                                <i class="bi ms-3 bi-heart-fill text-danger"></i>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-12 reviewbody mt-2 px-3 px-lg-5">
                                        <p class="l-para2">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magnam
                                            necessitatibus ratione laborum, animi
                                            possimus aliquam quisquam modi unde doloremque dignissimos enim omnis
                                            consequuntur repellat dolore voluptas
                                            earum numquam. Ullam.
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-lg-6  mb-2">
                                <div class="row l-side-card bg-white   g-0 py-3 px-2  mb-lg-2 d-flex ">
                                    <div class="col-12     l-reviewHead px-3 px-lg-5">

                                        <div class="row">

                                            <div class=" col-1    ">
                                                <img src="./Images/Dhanika-Perera.png" class="rounded-circle" alt=""
                                                    style="width: 40px; ">
                                            </div>

                                            <div class=" col-8  col-md-6 ps-5 ps-md-4 ">
                                                <h5 class="l-card-title p-0 m-0 ">Asiri Gayashan</h5>
                                                <label class="l-para2">02 Dec 2001</label> <br>
                                            </div>

                                            <div class="col-3 col-md-5 d-flex align-items-center justify-content-end">
                                                <i class="bi bi-star-fill me-1 fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 d-none d-lg-flex fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 d-none d-lg-flex fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 fs-6 l-ratings"></i>
                                                <i class="bi bi-star-half me-1 fs-6 l-ratings"></i>
                                                <i class="bi ms-3 bi-heart-fill text-danger"></i>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-12 reviewbody mt-2 px-3 px-lg-5">
                                        <p class="l-para2">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magnam
                                            necessitatibus ratione laborum, animi
                                            possimus aliquam quisquam modi unde doloremque dignissimos enim omnis
                                            consequuntur repellat dolore voluptas
                                            earum numquam. Ullam.
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-lg-6  mb-2">
                                <div class="row l-side-card bg-white   g-0 py-3 px-2  mb-lg-2 d-flex ">
                                    <div class="col-12     l-reviewHead px-3 px-lg-5">

                                        <div class="row">

                                            <div class=" col-1    ">
                                                <img src="./Images/Dhanika-Perera.png" class="rounded-circle" alt=""
                                                    style="width: 40px; ">
                                            </div>

                                            <div class=" col-8  col-md-6 ps-5 ps-md-4 ">
                                                <h5 class="l-card-title p-0 m-0 ">Asiri Gayashan</h5>
                                                <label class="l-para2">02 Dec 2001</label> <br>
                                            </div>

                                            <div class="col-3 col-md-5 d-flex align-items-center justify-content-end">
                                                <i class="bi bi-star-fill me-1 fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 d-none d-lg-flex fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 d-none d-lg-flex fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 fs-6 l-ratings"></i>
                                                <i class="bi bi-star-half me-1 fs-6 l-ratings"></i>
                                                <i class="bi ms-3 bi-heart-fill text-danger"></i>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-12 reviewbody mt-2 px-3 px-lg-5">
                                        <p class="l-para2">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magnam
                                            necessitatibus ratione laborum, animi
                                            possimus aliquam quisquam modi unde doloremque dignissimos enim omnis
                                            consequuntur repellat dolore voluptas
                                            earum numquam. Ullam.
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-lg-6  mb-2">
                                <div class="row l-side-card bg-white   g-0 py-3 px-2  mb-lg-2 d-flex ">
                                    <div class="col-12     l-reviewHead px-3 px-lg-5">

                                        <div class="row">

                                            <div class=" col-1    ">
                                                <img src="./Images/Dhanika-Perera.png" class="rounded-circle" alt=""
                                                    style="width: 40px; ">
                                            </div>

                                            <div class=" col-8  col-md-6 ps-5 ps-md-4 ">
                                                <h5 class="l-card-title p-0 m-0 ">Asiri Gayashan</h5>
                                                <label class="l-para2">02 Dec 2001</label> <br>
                                            </div>

                                            <div class="col-3 col-md-5 d-flex align-items-center justify-content-end">
                                                <i class="bi bi-star-fill me-1 fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 d-none d-lg-flex fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 d-none d-lg-flex fs-6 l-ratings"></i>
                                                <i class="bi bi-star-fill me-1 fs-6 l-ratings"></i>
                                                <i class="bi bi-star-half me-1 fs-6 l-ratings"></i>
                                                <i class="bi ms-3 bi-heart-fill text-danger"></i>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-12 reviewbody mt-2 px-3 px-lg-5">
                                        <p class="l-para2">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magnam
                                            necessitatibus ratione laborum, animi
                                            possimus aliquam quisquam modi unde doloremque dignissimos enim omnis
                                            consequuntur repellat dolore voluptas
                                            earum numquam. Ullam.
                                        </p>
                                    </div>

                                </div>
                            </div>




                        </div>

                    </div>




                </div>

            </div>
        </div>


        <!-- ---------------------------------------------------------------------------------------------Description   -->

        <!-- ---------------------------------------------------------------------------------------------Products   -->


        <!-- ----------------------------------------------------------------- Recent Watched -->


        <div class="row px-1  px-sm-5   mt-5 mb-5 ">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <label class="l-head-title fs-4 fw-bold">Recommand Items</label>
                    </div>
                    <div class="col-12  mt-4">

                        <div class="row p-0 d-flex ">



                            <?php


    $rePrRs = Database::search("SELECT * FROM `product` LIMIT 5");
    $rePrNR = $rePrRs->num_rows;

    for ($i = 0; $i < $rePrNR; $i++) {


        $reData = $rePrRs->fetch_assoc();

                            ?>

                            <div class="col col-6 col-lg mt-2   mb-3"
                                onclick='window.location = "singleProductView.php?id=<?php echo $reData["id"]; ?>"'>
                                <div class="l-card">

                                    <img src="./Images/bookbackground.jpg" class="l-card-imag w-100" alt="">
                                    <div class=" pt-0 pb-3 pt-3 px-2 px-md-3 ">
                                        <div class="l-card-body text-center">
                                            <h5 class="l-card-title  ">
                                                <?php echo $reData["title"]; ?>
                                            </h5>
                                            <label class="l-para2">
                                                <?php echo $reData["author"]; ?> |
                                                <?php echo $reData["year"]; ?>
                                            </label> <br>
                                            <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">4
                                                Lang</label>
                                            <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free
                                                PDF</label>
                                        </div>
                                        <div class="l-card-footer mt-2">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-7 d-none d-sm-flex">
                                                    <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                    <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                    <i class="bi bi-star-half me-1 l-ratings"></i>
                                                    <span class="l-ratings">(136)</span>
                                                </div>
                                                <div class="col-6 d-sm-none">
                                                    <i class="bi bi-star-fill l-ratings"></i>
                                                    <span class="l-ratings">(136)</span>
                                                </div>
                                                <div class="col-6 col-sm-5 text-end">
                                                    <label class="fw-bold l-card-price ">Rs
                                                        <?php echo $reData["buyNow"]; ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <?php



    }




                            ?>


                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- ---------------------------------------------------------------------------------------------Recent Watched   -->

        <!-- ---------------------------------------------------------------------------------------------Footer   -->

        <?php
    include "footer.php";
        ?>

        <!-- ---------------------------------------------------------------------------------------------Footer   -->




    </div>



    <script src="./bootstrap.bundle.js"></script>
    <script src="./bootstrap.min.js"></script>
    <script src="./script.js"></script>

</body>

</html>




<?php


} else {

    header("Location: index.php");

}




?>