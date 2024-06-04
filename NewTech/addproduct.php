<?php

session_start();

if (isset($_SESSION["a"])) {


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

        <title>List Items | New Tech</title>
    </head>

    <body>

        <div class="container-fluid">


            <?php
            include "headerTop.php";
            ?>


            <div class="row l-bg-primary  text-center" id="top">
                <div class="col-3 listing-header-side">
                </div>
                <div class="col-6">
                    <label class="l-head-title py-3 fs-3 fw-bolder">Create your listing</label>
                </div>
                <div class="col-3 listing-header-side">
                </div>
            </div>


            <div class="row mt-5">

                <div class="col-12">
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
                </div>


                <div class="col-12 col-lg-6 mb-lg-5 ">

                    <div class="row px-2 px-lg-5 ">
                        <div class="col-12 l-bg-primary">
                            <label class="l-head-title fs-4 fw-bold ">Item Details</label>
                        </div>
                        <div class="col-12 mt-3 ">
                            <label class="l-card-title fw-bolder">Title*</label>
                            <input type="text" class="form-control mt-1  l-sign-input" id="ti">
                        </div>
                        <div class="col-12 mt-3">
                            <label class="l-card-title fw-bolder">Author*</label>
                            <input type="text" class="form-control mt-1  l-sign-input" id="au">
                        </div>



                        <div class="col-6 mt-3">
                            <label class="l-card-title fw-bolder">Publisher*</label>
                            <select name="" class="form-control mt-1  l-sign-input" id="pub">




                                <?php


                                $pubRs = Database::search("SELECT * FROM `publisher`");
                                $pubNR = $pubRs->num_rows;

                                for ($i = 0; $i < $pubNR; $i++) {

                                    $pubData = $pubRs->fetch_assoc();

                                    ?>

                                    <option value="<?php echo $pubData["id"]; ?>">
                                        <?php echo $pubData["name"]; ?>
                                    </option>



                                    <?php

                                }



                                ?>



                            </select>
                        </div>

                        <div class="col-6 mt-3">
                            <label class="l-card-title fw-bolder">Language</label>
                            <div class="d-flex align-items-center">


                                <select name="" class="form-control mt-1  l-sign-input" id="lang">
                                    <option value="0">Select</option>

                                    <?php


                                    $langRs = Database::search("SELECT * FROM `lang`");
                                    $langNR = $langRs->num_rows;

                                    for ($i = 0; $i < $langNR; $i++) {

                                        $langData = $langRs->fetch_assoc();

                                        ?>

                                        <option value="<?php echo $langData["id"]; ?>"
                                            id="<?php echo "ola" . $langData["id"]; ?>">
                                            <?php echo $langData["name"]; ?>
                                        </option>

                                        <?php

                                    }

                                    ?>
                                </select>

                                <a class="btn l-btn-social ms-1" onclick="addLang();"><i class="bi bi-plus fw-bold"></i></a>


                            </div>


                        </div>


                        <div class="col-12 mt-3">
                            <div class="form-control mt-1  l-sign-input overflow-scroll" style="height: 120px;"
                                id="langdiv">





                            </div>
                        </div>




                        <div class="col-12 mt-3">
                            <label class="l-card-title fw-bolder">ISBN 13</label>
                            <input type="text" class="form-control mt-1  l-sign-input" id="i13">
                        </div>
                        <div class="col-12 mt-3">
                            <label class="l-card-title fw-bolder">ISBN 10*</label>
                            <input type="text" class="form-control mt-1  l-sign-input" id="i10">
                        </div>
                        <div class="col-6 mt-3">
                            <label class="l-card-title fw-bolder">Year*</label>
                            <input type="text" class="form-control mt-1  l-sign-input" id="yea">

                        </div>
                        <div class="col-6 mt-3">
                            <label class="l-card-title fw-bolder">Condition*</label>
                            <select name="" class="form-control mt-1  l-sign-input" id="con">



                                <?php


                                $conRs = Database::search("SELECT * FROM `condition`");
                                $conNR = $conRs->num_rows;

                                for ($i = 0; $i < $conNR; $i++) {

                                    $conData = $conRs->fetch_assoc();

                                    ?>

                                    <option value="<?php echo $conData["id"]; ?>">
                                        <?php echo $conData["name"]; ?>
                                    </option>

                                    <?php

                                }



                                ?>



                            </select>
                        </div>

                        <div class="col-12 mt-3">
                            <label class="l-card-title fw-bolder">Subtitle</label>
                            <input type="text" class="form-control mt-1  l-sign-input" id="sub">
                        </div>
                        <div class="col-12 mt-3">
                            <label class="l-card-title fw-bolder">Description</label>
                            <textarea name="" class="form-control mt-1  l-sign-input" cols="30" rows="10"
                                id="dec"></textarea>
                        </div>

                        <div class="col-6 mt-3">
                            <label class="l-card-title fw-bolder">Category*</label>
                            <select name="" class="form-control mt-1  l-sign-input" id="cat">
                                <option value="0">Select</option>

                                <?php

                                $catRs = Database::search("SELECT * FROM `category`");
                                $catNr = $catRs->num_rows;
                                for ($i = 0; $i < $catNr; $i++) {

                                    $catData = $catRs->fetch_assoc();

                                    ?>

                                    <option value="<?php echo $catData["id"]; ?>">
                                        <?php echo $catData["name"]; ?>
                                    </option>

                                    <?php

                                }
                                ?>



                            </select>
                        </div>

                        <div class="col-6 mt-3">
                            <label class="l-card-title fw-bolder">Sub Category</label>
                            <select name="" class="form-control mt-1  l-sign-input" id="scat">
                                <option value="">Stamps</option>
                            </select>
                        </div>

                        <div class="col-12 mt-3">
                            <label class="l-card-title fw-bolder">Product Images</label>
                            <div class="row mt-1 gap-3 ">
                                <div class="col l-addProduct-img py-2 text-center bg-light">
                                    <i class="bi bi-image-fill  "></i>
                                </div>
                                <div class="col l-addProduct-img py-2 text-center bg-light">
                                    <i class="bi bi-image-fill  "></i>
                                </div>
                                <div class="col l-addProduct-img py-2 text-center bg-light">
                                    <i class="bi bi-image-fill  "></i>
                                </div>
                                <div class="col l-addProduct-img py-2 text-center bg-light">
                                    <i class="bi bi-image-fill  "></i>
                                </div>

                            </div>
                            <div class="row-cols-1 mt-3">
                                <input type="file" id="prImages" class="d-none">

                                <label for="prImages" class="btn btn-outline-warning text-black">Add Images</label>
                            </div>
                        </div>



                    </div>

                </div>

                <div class="col-12 col-lg-6">

                    <div class="row   mb-5">

                        <div class="col-12 mt-4 mt-lg-0     ">
                            <div class="row px-2 px-lg-5 ">
                                <div class="col-12 l-bg-primary">
                                    <label class="l-head-title fs-4 fw-bold ">Selling Details</label>
                                </div>
                                <div class="col-6 mt-3 ">
                                    <label class="l-card-title fw-bolder">Starting Price*</label>
                                    <input type="text" class="form-control mt-1  l-sign-input" id="stpr">
                                </div>
                                <div class="col-6 mt-3 ">
                                    <label class="l-card-title fw-bolder">Buy Now Price*</label>
                                    <input type="text" class="form-control mt-1  l-sign-input" id="bnpr">
                                </div>
                                <div class="col-6 mt-3 ">
                                    <label class="l-card-title fw-bolder">Quantity*</label>
                                    <input type="text" class="form-control mt-1  l-sign-input" id="qty">
                                </div>
                                <div class="col-6 mt-3 ">
                                    <label class="l-card-title fw-bolder">Sales Tax</label>
                                    <input type="text" class="form-control mt-1  l-sign-input" id="tax">
                                </div>





                            </div>


                        </div>




                        <div class="col-12 mt-4    ">
                            <div class="row px-2 px-lg-5 ">
                                <div class="col-12 l-bg-primary">
                                    <label class="l-head-title fs-4 fw-bold ">Shipping Details</label>
                                </div>

                                <div class="col-6 mt-3 ">
                                    <label class="l-card-title fw-bolder">Shipping</label>
                                    <select name="" class="form-control mt-1  l-sign-input" id="shiptype"
                                        onclick="changeStype();">
                                        <?php

                                        $strs = Database::search("SELECT * FROM `shippingtype`");
                                        $stnr = $strs->num_rows;

                                        for ($i = 0; $i < $stnr; $i++) {

                                            $stdata = $strs->fetch_assoc();
                                            ?>

                                            <option value="<?php echo $stdata["id"]; ?>">
                                                <?php echo $stdata["name"]; ?>
                                            </option>


                                            <?php

                                        }

                                        ?>


                                    </select>
                                </div>

                                <div class="col-6 mt-3 ">
                                    <label class="l-card-title fw-bolder">Shipping Cost*</label>
                                    <input type="text" class="form-control mt-1  l-sign-input" placeholder="Rs 500"
                                        id="shipcost" disabled>

                                </div>



                                <div class="col-6 mt-3 ">
                                    <label class="l-card-title fw-bolder">Weight</label>
                                    <input type="text" class="form-control mt-1  l-sign-input" placeholder="3g" id="weight">
                                </div>

                                <div class="col-6 mt-3 ">
                                    <label class="l-card-title fw-bolder">Package Type</label>
                                    <select name="" class="form-control mt-1  l-sign-input" id="pkgtyp">
                                        <?php

                                        $pkgrs = Database::search("SELECT * FROM `packagetype`");
                                        $pkgnr = $strs->num_rows;

                                        for ($i = 0; $i < $pkgnr; $i++) {

                                            $pkgdata = $pkgrs->fetch_assoc();
                                            ?>

                                            <option value="<?php echo $pkgdata["id"]; ?>">
                                                <?php echo $pkgdata["name"]; ?>
                                            </option>


                                            <?php

                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-5">
                            <div class=" px-2 px-lg-5 ">
                                <div class="col-12 d-grid">
                                    <a class="btn l-dark-btn text-white" onclick="addProduct();" href="#top">ADD PRODUCT</a>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-12 mt-5">
                            <button onclick="priId();">
    Click
                            </button>
                        </div> -->



                    </div>


                </div>

            </div>



            <!-- ----------------------------------------------------------------- Footer -->
            <?php

            include "footer.php"

                ?>
            <!-- ----------------------------------------------------------------- Footer -->



        </div>


        <script src="./bootstrap.bundle.js"></script>
        <script src="./bootstrap.min.js"></script>
        <script src="./script.js"></script>


    </body>

    </html>



    <?php


} else {

    header("Location: adminLogin.php");


}

?>