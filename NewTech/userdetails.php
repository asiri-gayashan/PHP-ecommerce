<!DOCTYPE html>
<html lang="en">

<?php
$sitename = "Ashirwadha";
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

    <title>User Profile | <?php echo $sitename; ?></title>
</head>

<body>

    <div class="container-fluid">


        <?php
        
        include "headerTop.php";
        ?>


        <div class="row l-bg-primary  text-center">
            <div class="col-3 listing-header-side">
            </div>
            <div class="col-6">
                <label class="l-head-title py-3 fs-3 fw-bolder"> User Profile</label>
            </div>
            <div class="col-3 listing-header-side">
            </div>
        </div>


        <div class="row mt-5">

            <div class="col-12 col-lg-6 mb-lg-5 ">

                <div class="row px-2 px-lg-5 ">
                    <div class="col-12 l-bg-primary">
                        <label class="l-head-title fs-4 fw-bold ">User Details</label>
                    </div>
                    <div class="col-12 mt-3 ">
                        <label class="l-card-title fw-bolder">Name*</label>
                        <input type="text" class="form-control mt-1  l-sign-input">
                    </div>
                    <div class="col-12 mt-3">
                        <label class="l-card-title fw-bolder">Email*</label>
                        <input type="text" class="form-control mt-1  l-sign-input">
                    </div>
                    <div class="col-12 mt-3">
                        <label class="l-card-title fw-bolder">Password*</label>
                        <input type="text" class="form-control mt-1  l-sign-input">
                    </div>
                    <div class="col-12 mt-3">
                        <label class="l-card-title fw-bolder">Mobile*</label>
                        <input type="text" class="form-control mt-1  l-sign-input">
                    </div>


                    <div class="col-12 mt-3">
                        <label class="l-card-title fw-bolder">Profile Image</label>
                        <div class="row mt-1 gap-3 ">
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
                                <label class="l-head-title fs-4 fw-bold ">Shipping Details</label>
                            </div>
                            <div class="col-12 mt-3">
                                <label class="l-card-title fw-bolder">Shipping Address</label>
                                <input type="text" class="form-control mt-1  l-sign-input">
                            </div>
                            <div class="col-12 mt-3">
                                <label class="l-card-title fw-bolder">Billing Address</label>
                                <input type="text" class="form-control mt-1  l-sign-input">
                            </div>
                            <div class="col-12 mt-3">
                                <label class="l-card-title fw-bolder">Other Names</label>
                                <input type="text" class="form-control mt-1  l-sign-input">
                            </div>

                        </div>


                    </div>




                

                    <div class="col-12 mt-5">
                        <div class=" px-2 px-lg-5 ">
                            <div class="col-12 d-grid">
                                <label class="btn l-dark-btn text-white">Update Profile</label>
                            </div>
                        </div>
                    </div>


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