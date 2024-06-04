<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require("connection.php");
?>

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

    <title>Wishlist | New Tech</title>
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
                            <div
                                class="col-9 col-md-6 offset-md-4 d-flex align-items-center justify-content-start justify-content-lg-end ">


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




                    <?php

                    if (isset($_SESSION["u"])) {




                        ?>














                <!-- <div class="col-12">
                    <div class="row px-2 px-lg-5 ">
                        <div class=" col-12 px-5 d-none mb-lg-5" id="altDiv">
                            <div class="alert alert-warning l-para text-black alert-dismissible fade show" role="alert"
                                style="width: 100%;">
                                <Strong>Warning : </Strong>
                                <span id="alert">
                                    Your details are incorrect.
                                </span>
                            </div>
                        </div>

                    </div>
                </div> -->



                 


                        <div class="col-12 mb-3">
                            <label class="l-head-title fs-4 fw-bold">Wishlist </label>
                            <input type="text" id="qty" value="1" class="d-none">
                        </div>

                        <?php


                        $email = $_SESSION["u"]["email"];

                        $wishlist = Database::search("SELECT `wishlist`.`id`, `wishlist`.`product_id`, `product`.`title`, `product`.`buyNow`,
                          `product`.`author`,  `product`.`qty` AS stockQTY, `publisher`.`name` FROM `wishlist` INNER JOIN `product` ON
                           `wishlist`.`product_id` = `product`.`id` INNER JOIN `publisher` ON `product`.`publisher_id` = `publisher`.`id` 
                            WHERE `wishlist`.`user_email` = '" . $email . "' ");

                        $wnr = $wishlist->num_rows;

if($wnr <= 0){


    ?>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row ">
    
    
                                                <div class="col-4 offset-4  mt-5">
                                                    <label class="l-head-title mx-auto fs-4 fw-bold me-4">No items
                                                        found...</label>
                                                    <a class="btn l-dark-btn  text-white" href="./search.php">Back to shop</a>
    
                                                </div>
    
    
                                            </div>
                                        </div>
                                    </div>



    <?php 


}else{

    for ($i = 0; $i < $wnr; $i++) {

        $wData = $wishlist->fetch_assoc();

        $rate = Database::search("SELECT SUM(`comment`.`starRate`) AS sumStars, COUNT(`comment`.`starRate`) 
AS countStars FROM `comment` INNER JOIN `product` ON `product`.`id` = `comment`.`productId` WHERE
`product`.`id` = '" . $wData["product_id"] . "'");

        $rateData = $rate->fetch_assoc();

        $avgRate = 5;

        if ($rateData["sumStars"] == 0) {

            $avgRate = 0;


        } else {


            $avgRate = number_format($rateData["sumStars"] / $rateData["countStars"], 1);

        }


        ?>


        <div class="col-12 col-lg-6 mb-2" id="reloadDiv">
            <div class="row l-side-card g-0 py-3 px-2 mb-1 mb-lg-3 d-flex ">
                <div class="col-12 col-lg-6 d-flex align-items-center mb-2">
                    <img src="./Images/bookbackground.jpg" class="img-fluid w-25 me-3 rounded-start"
                        alt="...">
                    <div class="col d-block overflow-hidden">
                        <label class="l-side-card-title  ">
                            <?php echo $wData["title"]; ?>
                        </label>
                        <h5 class="l-para2   pe-5">
                            <?php echo $wData["author"]; ?>
                        </h5>
                    </div>
                    <div class=" d-md-none d-flex align-items-baseline">
                        <a class="btn l-model-btn me-1 bx-sh-none" href="/newtech/singleProductView.php?id=<?php echo $wData["product_id"]; ?>"><i
                                class="bi bi-eye-fill"></i></a>
                        <a class="btn l-model-btn me-1 bx-sh-none "  onclick="addToCart(<?php echo $wData["product_id"]; ?>, '<?php echo $email; ?>');" ><i class="bi bi-cart-plus-fill"></i></a>
                        <a class="btn l-model-btn bx-sh-none"><i class="bi bi-heart-fill"></i></a>
                    </div>
                </div>

                <div class="col-12 col-md-4 ps-2 my-2  d-flex d-md-none align-items-center  ">
                    <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Sinhala</label>
                    <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free
                        Delivery</label>

                    <?php

                    if ($wData["stockQTY"] <= 0) {

                        ?>

                        <label class="l-para2 text-white bg-danger py-0 px-1 me-1 rounded">Out of Stock</label>

                        <?php

                    } else {

                        ?>

                        <label class="l-para2 text-white bg-primary py-0 px-1 me-1 rounded">In Stock</label>

                    <?php

                    }

                    ?>








                </div>

                <div class="col-4 col-lg-2 ps-2 d-flex align-items-center ">
                    <label class="l-side-card-title  overflow-hidden">
                        <?php echo $wData["name"]; ?>
                    </label>
                </div>
                <div class="col-4 col-lg-2 ps-3 pe-2 d-flex align-items-center overflow-hidden  d-grid">

                    <?php

                    if ($avgRate <= 0) {

                        ?>

                        <i class="bi bi-star l-ratings me-1"></i>
                        <span class="l-ratings">
                            No
                        </span>


                        <?php


                    } else {
                        ?>

                        <i class="bi bi-star-fill l-ratings me-1"></i>
                        <span class="l-ratings">
                            <?php echo $avgRate; ?>
                        </span>

                        <?php
                    }


                    ?>


                </div>
                <div class="col-3 col-lg-2 ps-4 d-flex align-items-center ">
                    <label class="l-side-card-title  ">Rs
                        <?php echo $wData["buyNow"]; ?>
                    </label>
                </div>


                <div class="col-6 ps-2 my-2  d-none d-md-flex align-items-center  ">
                    <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Sinhala</label>
                    <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free
                        Delivery</label>


                        <?php

if ($wData["stockQTY"] <= 0) {

?>
                    <label class="l-para2 text-white bg-danger py-0 px-1 me-1 rounded">Out of Stock</label>


<?php

} else {

?>
                    <label class="l-para2 text-white bg-primary py-0 px-1 me-1 rounded">In Stock</label>


<?php

}

?>


                        

                </div>
                <div class=" col-6 d-none d-lg-flex justify-content-end">



                    <a class="btn l-model-btn me-1 bx-sh-none" href="/newtech/singleProductView.php?id=<?php echo $wData["product_id"]; ?>"><i
                            class="bi bi-eye-fill"></i></a>
                    <a class="btn l-model-btn me-1 bx-sh-none "  onclick="addToCart(<?php echo $wData["product_id"]; ?>, '<?php echo $email; ?>');" ><i class="bi bi-cart-plus-fill"></i></a>
                    <a class="btn l-model-btn bx-sh-none" onclick="addwishlist(<?php echo $wData["product_id"]; ?>, '<?php echo $email; ?>');"><i class="bi bi-heart-fill"></i></a>

                </div>
            </div>
        </div>








        <?php


    }

    

}


                       


                        ?>






                        <!-- 

                                                            <div class="col-12 col-lg-6 mb-2">
                                                                <div class="row l-side-card g-0 py-3 px-2 mb-1 mb-lg-3 d-flex ">
                                                                    <div class="col-12 col-lg-6 d-flex align-items-center mb-2">
                                                                        <img src="./Images/bookbackground.jpg" class="img-fluid w-25 me-3 rounded-start"
                                                                            alt="...">
                                                                        <div class="col d-block overflow-hidden">
                                                                            <label class="l-side-card-title  ">ගම් පෙරළිය</label>
                                                                            <h5 class="l-para2   pe-5">Martin Wickramasinghe </h5>
                                                                        </div>
                                                                        <div class=" d-md-none d-flex align-items-baseline">
                                                                            <a class="btn l-model-btn me-1 bx-sh-none" href="./updateProducts.php"><i
                                                                                    class="bi bi-eye-fill"></i></a>
                                                                            <a class="btn l-model-btn me-1 bx-sh-none "><i class="bi bi-cart-plus-fill"></i></a>
                                                                            <a class="btn l-model-btn bx-sh-none"><i class="bi bi-heart-fill"></i></a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 col-md-4 ps-2 my-2  d-flex d-md-none align-items-center  ">
                                                                        <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Sinhala</label>
                                                                        <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free
                                                                            Delivery</label>
                                                                        <label class="l-para2 text-white bg-primary py-0 px-1 me-1 rounded">In Stock</label>
                                                                    </div>

                                                                    <div class="col-4 col-lg-2 ps-2 d-flex align-items-center ">
                                                                        <label class="l-side-card-title  overflow-hidden">Malpiyali</label>
                                                                    </div>
                                                                    <div class="col-4 col-lg-2 ps-3 pe-2 d-flex align-items-center overflow-hidden  d-grid">
                                                                        <i class="bi bi-star-fill l-ratings me-1"></i>
                                                                        <span class="l-ratings"> 4.8</span>
                                                                    </div>
                                                                    <div class="col-3 col-lg-2 ps-4 d-flex align-items-center ">
                                                                        <label class="l-side-card-title  ">Rs 500</label>
                                                                    </div>


                                                                    <div class="col-6 ps-2 my-2  d-none d-md-flex align-items-center  ">
                                                                        <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Sinhala</label>
                                                                        <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free
                                                                            Delivery</label>
                                                                        <label class="l-para2 text-white bg-primary py-0 px-1 me-1 rounded">In Stock</label>

                                                                    </div>
                                                                    <div class=" col-6 d-none d-lg-flex justify-content-end">

                                                                        <a class="btn l-model-btn me-1 bx-sh-none" href="./updateProducts.php"><i
                                                                                class="bi bi-eye-fill"></i></a>
                                                                        <a class="btn l-model-btn me-1 bx-sh-none "><i class="bi bi-cart-plus-fill"></i></a>
                                                                        <a class="btn l-model-btn bx-sh-none"><i class="bi bi-heart-fill"></i></a>

                                                                    </div>
                                                                </div>
                                                            </div>


                                     -->






                        <?php







                    } else {


                        ?>


                        <div class="col-12">

                            <div class="row">
                                <div class="col-12 ">
                                    <div class="row  mt-5 mb-5">


                                        <div class="col-12 col-md-6 offset-lg-3 mt-5">
                                            <label class="l-head-title mx-auto fs-4 fw-bold me-4"> You want to login
                                            </label>

                                            <a class="btn  text-black bg-warning   px-5 py-2" href="./signIn.php">Login or
                                                Sign
                                                Up</a>

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

        <?php
        include "footer.php"
            ?>
    </div>






    </div>


    <script src="./bootstrap.bundle.js"></script>
    <script src="./bootstrap.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>