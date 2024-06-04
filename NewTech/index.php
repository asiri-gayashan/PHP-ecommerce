<?php
session_start();


require "connection.php";


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

    <title>New Tech</title>

</head>

<body>

    <div class="container-fluid ">
        <!-- ----------------------------------------------------------------- header Start -->
        <!-- ----------------------------------------------------------------- header top  -->

        <?php
        include "headerTop.php";
        ?>

        <!-- ----------------------------------------------------------------- header top  -->

        <!-- ----------------------------------------------------------------- header bottom  -->
        <?php
        include "headermiddle.php"
            ?>
        <!-- ----------------------------------------------------------------- header bottom  -->

        <!-- ----------------------------------------------------------------- header nav -->
        <div class="row d-none l-nav py-3 l-padding d-lg-flex">
            <div class="col-12 d-flex ">
                <ul class="list-unstyled mx-auto gap-4 my-auto d-flex">
                    <li><a href="" class="l-nav-links">Home</a></li>
                    <li><a href="" class="l-nav-links">Shop</a></li>
                    <li><a href="singleProductView.php" class="l-nav-links">Vendors</a></li>
                    <li><a href="" class="l-nav-links">About</a></li>
                    <li><a href="" class="l-nav-links">Contact</a></li>
                    <li><a href="" class="l-nav-links">Blog</a></li>
                </ul>
            </div>
        </div>
        <!-- ----------------------------------------------------------------- header nav -->
        <!-- ----------------------------------------------------------------- header end -->

        <!-- ----------------------------------------------------------------- Banner -->





        <div class="row  ">
            <div class="col-12">
                <div class="row  text-white  " style="height: 350px;">
                    <div class="col-12 col-md-9 l-ourApp-left1 ">
                        <div class="row py-5 px-4 px-md-0  ps-md-5">

                        </div>
                    </div>
                    <div class="col-3 l-ourApp-right1 d-none d-md-block py-5 px-5 bg-danger">


                    </div>

                </div>
            </div>
        </div>




        <!-- ----------------------------------------------------------------- Banner -->

        <!-- ----------------------------------------------------------------- Why choose us -->



        <div class="row l-padding mt-5">
            <div class="col-12 ">
                <div class="row g-3 d-block d-md-flex ">
                    <div class="col">
                        <div class="col-12 py-3 px-3  l-choose-div1 ">
                            <div class="row ">
                                <div class="col-3 pt-0">
                                    <i class="bi bi-truck l-chooce-icon"></i>
                                </div>
                                <div class="col-9">
                                    <h5 class="l-chooce-head">Fast Delivery</h5>
                                    <span class="l-para">Free shipping on orders over $49! Need we say more?</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="col-12 py-3 px-3  l-choose-div2 ">
                            <div class="row ">
                                <div class="col-3 pt-0">
                                    <i class="bi bi-cash-coin l-chooce-icon"></i>
                                </div>
                                <div class="col-9">
                                    <h5 class="l-chooce-head">100% Money refund</h5>
                                    <span class="l-para">We're commited to the perfect fit. always.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="col-12 py-3 px-3  l-choose-div3 ">
                            <div class="row ">
                                <div class="col-3 pt-0">
                                    <i class="bi bi-box2 l-chooce-icon"></i>
                                </div>
                                <div class="col-9">
                                    <h5 class="l-chooce-head">60-Day Returns</h5>
                                    <span class="l-para">If you don't love it, you have 60 days to return it</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>



        <!-- ----------------------------------------------------------------- Why choose us -->

        <!-- ----------------------------------------------------------------- Latest Products -->


        <div class="row px-1  px-sm-5  mt-5 mb-5 ">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row mb-3">
                            <div class="col-12">
                                <label class="l-head-title fs-4 fw-bold">Latest Items</label>
                            </div>

                            <div class="col-12  mt-4">

                                <div class="row p-0 d-flex ">



                                    <?php


                                    $latRS = Database::search("SELECT * FROM `product` LIMIT 4");
                                    $latNR = $latRS->num_rows;

                                    for ($i = 0; $i < $latNR; $i++) {

                                        $latData = $latRS->fetch_assoc();



                                    ?>

                                    <div class="col col-6 col-lg mt-2   mb-3" onclick='window.location = "singleProductView.php?id=<?php echo $latData["id"]; ?>"'>
                                        <div class="l-card">
                                            <img src="./Images/bookbackground.jpg" class="l-card-imag w-100" alt="">
                                            <div class=" pt-0 pb-3 pt-3 px-2 px-md-3 ">
                                                <div class="l-card-body text-center">
                                                    <h5 class="l-card-title  ">
                                                        <?php echo $latData["title"]; ?>
                                                    </h5>
                                                    <label class="l-para2">
                                                        <?php echo $latData["author"]; ?> | <br>
                                                        <?php echo $latData["year"]; ?>
                                                    </label> <br>
                                                    <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">4
                                                        Lang</label>
                                                    <label
                                                        class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free
                                                        PDF</label>
                                                </div>
                                                <div class="l-card-footer mt-2">
                                                    <div class="row d-flex">
                                                        <div class="col-7 d-none d-sm-flex">
                                                            <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                            <i class="bi bi-star-fill me-1 l-ratings"></i>
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
                                                                <?php echo $latData["buyNow"]; ?>
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





                                    <!-- 
                                    <div class="col col-6 col-lg mt-2   mb-3">
                                        <div class="l-card">
                                            <img src="./Images/bookbackground.jpg" class="l-card-imag w-100" alt="">
                                            <div class=" pt-0 pb-3 pt-3 px-2 px-md-3 ">
                                                <div class="l-card-body text-center">
                                                    <h5 class="l-card-title  ">මඩොල් දූව</h5>
                                                    <label class="l-para2">Martin Wickramasinghe | 1998</label> <br>
                                                    <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">4 Lang</label>
                                                    <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free PDF</label>
                                                </div>
                                                <div class="l-card-footer mt-2">
                                                    <div class="row d-flex">
                                                        <div class="col-7 d-none d-sm-flex">
                                                            <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                            <i class="bi bi-star-fill me-1 l-ratings"></i>
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
                                                            <label class="fw-bold l-card-price ">Rs 500</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

  -->






                                </div>

                            </div>

                        </div>


                    </div>

                    <div class="col-12 col-lg-3 ">
                        <div class="row">

                            <div class="col-12">

                                <div class="row g-2">




                                    <?php

                                    $CatRS1 = Database::search("SELECT * FROM `category` LIMIT 4 ");
                                    $catNR1 = $CatRS1->num_rows;

                                    for ($i = 0; $i < $catNR1; $i++) {

                                        $catData1 = $CatRS1->fetch_assoc();



                                    ?>

                                    <div class="col-6  col-lg-12">
                                        <div class="row l-side-card g-0 py-2 px-2 mb-1 mb-lg-3 d-flex ">
                                            <div class="col-4">


                                                <?php

                                        $catimg = Database::search("SELECT * FROM `catimages` WHERE `catId` = '" . $catData1["id"] . "'");
                                        $catImgData = $catimg->fetch_assoc();


                                                ?>

                                                <img src="<?php echo $catImgData["path"]; ?>"
                                                    class="img-fluid pe-2 rounded-start" alt="...">
                                            </div>
                                            <div class="col-8  ps-1">
                                                <label class="l-side-card-title  ">
                                                    <?php echo $catData1["name"]; ?>
                                                </label>
                                                <div class="row d-none d-sm-flex">
                                                    <div class="col-12">
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-half me-1 l-ratings"></i>
                                                        <span class="l-ratings">(136)</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <?php






                                    }


                                    ?>





                                    <!-- 
                                    <div class="col-6  col-lg-12">
                                        <div class="row l-side-card g-0 py-2 px-2 mb-1 mb-lg-3 d-flex ">
                                            <div class="col-4">
                                                <img src="" class="img-fluid pe-2 rounded-start" alt="...">
                                            </div>
                                            <div class="col-8  ps-1">
                                                <label class="l-side-card-title  ">ළමා කතා </label>
                                                <div class="row d-none d-sm-flex">
                                                    <div class="col-12">
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-half me-1 l-ratings"></i>
                                                        <span class="l-ratings">(136)</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div> -->




                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ----------------------------------------------------------------- Latest Products -->


        <!-- ----------------------------------------------------------------- Our App -->


        <div class="row  mt-5">
            <div class="col-12">
                <div class="row  text-white  ">
                    <div class="col-12 col-md-9 l-ourApp-left ">
                        <div class="row py-5 px-4 px-md-0  ps-md-5">
                            <div class="col-12 col-md-4  l-ourApp-left-img">
                            </div>
                            <div class="col-12 col-md-7 ">
                                <label class="l-app-side-text">Download Our App</label>
                                <h1 class=" fs-1 text-black fw-bold ">
                                    One app for your <br> Reading journey
                                </h1>

                                <a class="l-app-side-text ">Buy Now</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-3 l-ourApp-right d-none d-md-block py-5 px-5 bg-danger">
                        <label class="l-app-side-text text-white ">FRESH BOOKS</label>
                        <h1 class="l-app-side-title fs-1 fw-bold ">
                            Subscribe<br> To Our<br> Newsletter.
                        </h1>

                    </div>

                </div>
            </div>
        </div>


        <!-- ----------------------------------------------------------------- Our App -->

        <!-- ----------------------------------------------------------------- Featured Products -->

        <div class="row px-1  px-sm-5   mt-5 mb-5 ">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <label class="l-head-title fs-4 fw-bold">Featured Items</label>
                    </div>
                    <div class="col-12  mt-4">

                        <div class="row p-0 d-flex ">





                            <?php


                            $FeaRS = Database::search("SELECT * FROM `product` LIMIT 5");
                            $FeaNR = $FeaRS->num_rows;



                            for ($i = 0; $i < $FeaNR; $i++) {

                                $feaData = $FeaRS->fetch_assoc();



                            ?>

                            <div class="col col-6 col-lg mt-2   mb-3" onclick='window.location = "singleProductView.php?id=<?php echo $feaData["id"]; ?>"'>
                                <div class="l-card">
                                    <img src="./Images/bookbackground.jpg" class="l-card-imag w-100" alt="">


                                    <div class=" pt-0 pb-3 pt-3 px-2 px-md-3 ">
                                        <div class="l-card-body text-center">
                                            <h5 class="l-card-title  ">
                                                <?php echo $feaData["title"]; ?>
                                            </h5>
                                            <label class="l-para2">
                                                <?php echo $feaData["author"]; ?> |
                                                <?php echo $feaData["year"]; ?>
                                            </label> <br>
                                            <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">4
                                                Lang</label>
                                            <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free
                                                PDF</label>
                                        </div>
                                        <div class="l-card-footer mt-2">
                                            <div class="row d-flex">
                                                <div class="col-7 d-none d-sm-flex">
                                                    <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                    <i class="bi bi-star-fill me-1 l-ratings"></i>
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
                                                        <?php echo $feaData["buyNow"]; ?>
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











                            <!-- 

                            <div class="col col-6 col-lg mt-2   mb-3">
                                <div class="l-card">
                                    <img src="./Images/bookbackground.jpg" class="l-card-imag w-100" alt="">


                                    <div class=" pt-0 pb-3 pt-3 px-2 px-md-3 ">
                                        <div class="l-card-body text-center">
                                            <h5 class="l-card-title  ">මඩොල් දූව</h5>
                                            <label class="l-para2">Martin Wickramasinghe | 1998</label> <br>
                                            <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">4
                                                Lang</label>
                                            <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free
                                                PDF</label>
                                        </div>
                                        <div class="l-card-footer mt-2">
                                            <div class="row d-flex">
                                                <div class="col-7 d-none d-sm-flex">
                                                    <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                    <i class="bi bi-star-fill me-1 l-ratings"></i>
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
                                                    <label class="fw-bold l-card-price ">Rs 500</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


 -->







                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- ----------------------------------------------------------------- Featured Products -->




        <!-- ----------------------------------------------------------------- Categories -->

        <div class="row px-1   px-sm-5  ">
            <div class="col-12  ">
                <div class="row">
                    <div class="col-12">
                        <label class="l-head-title fs-4 fw-bold">Popular Categories</label>
                    </div>
                    <div class="col-12  mt-4">
                        <div class="row g-2">
                            <div class="col-6  col-md-3  ">
                                <div class="row l-cat-card l-ccrd1 g-0 py-4 px-2 mb-1 mb-lg-3 d-flex ">

                                    <div class="col-12 text-center ps-1">
                                        <label class="l-side-card-title fs-3 text-white ">Novels</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6  col-md-3  ">
                                <div class="row l-cat-card l-ccrd2 g-0 py-4 px-2 mb-1 mb-lg-3 d-flex ">

                                    <div class="col-12 text-center ps-1">
                                        <label class="l-side-card-title fs-3 text-white ">Science</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6  col-md-3  ">
                                <div class="row l-cat-card l-ccrd3 g-0 py-4 px-2 mb-1 mb-lg-3 d-flex ">
                                    <div class="col-12 text-center ps-1">
                                        <label class="l-side-card-title fs-3 text-white ">History</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6  col-md-3  ">
                                <div class="row l-cat-card l-ccrd4 g-0 py-4 px-2 mb-1 mb-lg-3 d-flex ">
                                    <div class="col-12 text-center ps-1">
                                        <label class="l-side-card-title fs-3 text-white ">Adventure</label>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- ----------------------------------------------------------------- Categories -->

        <!-- ----------------------------------------------------------------- Recent Items -->


        <div class="row px-1 px-sm-5  mt-5 mb-5 ">
            <div class="col-12">
                <div class="row">

                    <div class=" d-none col-12 d-lg-flex  col-lg-3 ">
                        <div class="row">

                            <div class="col-12">
                                <div class="row g-2">




                                    <?php

                                    $CatRS1 = Database::search("SELECT * FROM `category` LIMIT 4 OFFSET 4");
                                    $catNR1 = $CatRS1->num_rows;

                                    for ($i = 0; $i < $catNR1; $i++) {

                                        $catData1 = $CatRS1->fetch_assoc();



                                    ?>

                                    <div class="col-6  col-lg-12">
                                        <div class="row l-side-card g-0 py-2 px-2 mb-1 mb-lg-3 d-flex ">
                                            <div class="col-4">


                                                <?php

                                        $catimg = Database::search("SELECT * FROM `catimages` WHERE `catId` = '" . $catData1["id"] . "'");
                                        $catImgData = $catimg->fetch_assoc();


                                                ?>

                                                <img src="<?php echo $catImgData["path"]; ?>"
                                                    class="img-fluid pe-2 rounded-start" alt="...">
                                            </div>
                                            <div class="col-8  ps-1">
                                                <label class="l-side-card-title  ">
                                                    <?php echo $catData1["name"]; ?>
                                                </label>
                                                <div class="row d-none d-sm-flex">
                                                    <div class="col-12">
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-half me-1 l-ratings"></i>
                                                        <span class="l-ratings">(136)</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <?php






                                    }


                                    ?>






                                    <!-- 
                                    <div class="col-6  col-lg-12">
                                        <div class="row l-side-card g-0 py-2 px-2 mb-1 mb-lg-3 d-flex ">
                                            <div class="col-4">


                                                <img src="./Product_Images/Historical.jpg"
                                                    class="img-fluid pe-2 rounded-start" alt="...">
                                            </div>
                                            <div class="col-8  ps-1">
                                                <label class="l-side-card-title  ">ඉතිහාස ප්‍රබන්ධ </label>
                                                <div class="row d-none d-sm-flex">
                                                    <div class="col-12">
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                        <i class="bi bi-star-half me-1 l-ratings"></i>
                                                        <span class="l-ratings">(136)</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
 -->




                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9  mt-4">

                        <div class="row p-0 d-flex ">





                            <?php


                            $latRS = Database::search("SELECT * FROM `product` LIMIT 4");
                            $latNR = $latRS->num_rows;

                            for ($i = 0; $i < $latNR; $i++) {

                                $latData = $latRS->fetch_assoc();



                            ?>

                            <div class="col col-6 col-lg mt-2   mb-3"  onclick='window.location = "singleProductView.php?id=<?php echo $feaData["id"]; ?>"'>
                                <div class="l-card">
                                    <img src="./Images/bookbackground.jpg" class="l-card-imag w-100" alt="">
                                    <div class=" pt-0 pb-3 pt-3 px-2 px-md-3 ">
                                        <div class="l-card-body text-center">
                                            <h5 class="l-card-title  ">
                                                <?php echo $latData["title"]; ?>
                                            </h5>
                                            <label class="l-para2">
                                                <?php echo $latData["author"]; ?> | <br>
                                                <?php echo $latData["year"]; ?>
                                            </label> <br>
                                            <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">4
                                                Lang</label>
                                            <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free
                                                PDF</label>
                                        </div>
                                        <div class="l-card-footer mt-2">
                                            <div class="row d-flex">
                                                <div class="col-7 d-none d-sm-flex">
                                                    <i class="bi bi-star-fill me-1 l-ratings"></i>
                                                    <i class="bi bi-star-fill me-1 l-ratings"></i>
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
                                                        <?php echo $latData["buyNow"]; ?>
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

            <!-- ----------------------------------------------------------------- Latest Products -->





        </div>




        <!-- ----------------------------------------------------------------- Recent Items -->







        <!-- ----------------------------------------------------------------- Footer -->
        <?php

        include "footer.php"

            ?>
        <!-- ----------------------------------------------------------------- Footer -->



    </div>

    <!-- -----------------------------------------------------------------bootstrap script -->
    <script src="./bootstrap.bundle.js"></script>
    <script src="./bootstrap.min.js"></script>
    <script src="./script.js"></script>

</body>

</html>