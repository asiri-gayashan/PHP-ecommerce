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


        <!-- ----------------------------------------------------------------- Latest Products -->


        <div class="row px-1  px-sm-5  mt-5 mb-5 ">
            <div class="col-12">
                <div class="row">
           
                    <div class="col-12  ">
                        <div class="row">

                            <div class="col-12">





                                <div class="row g-3 d-flex  " >




                                    <?php

                                    $CatRS1 = Database::search("SELECT * FROM `category` ");
                                    $catNR1 = $CatRS1->num_rows;

                                    for ($i = 0; $i < $catNR1; $i++) {

                                        $catData1 = $CatRS1->fetch_assoc();



                                    ?>

                                    <div class="col-6 pb-2 col-lg-3">
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