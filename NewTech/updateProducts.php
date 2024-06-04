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


        <div class="row l-bg-primary  text-center">
            <div class="col-3 listing-header-side">
            </div>
            <div class="col-6">
                <label class="l-head-title py-3 fs-3 fw-bolder">Update Product</label>
            </div>
            <div class="col-3 listing-header-side">
            </div>
        </div>


        <div class="row mt-5">

            <div class="col-12 col-lg-6 mb-lg-5 ">

                <div class="row px-2 px-lg-5 ">
                    <div class="col-12 l-bg-primary">
                        <label class="l-head-title fs-4 fw-bold ">Item Details</label>
                    </div>
                    <div class="col-12 mt-3 ">
                        <label class="l-card-title fw-bolder">Title*</label>
                        <input type="text" class="form-control mt-1  l-sign-input">
                    </div>
                    <div class="col-12 mt-3">
                        <label class="l-card-title fw-bolder">Author*</label>
                        <input type="text" class="form-control mt-1  l-sign-input">
                    </div>
                    <div class="col-12 mt-3">
                        <label class="l-card-title fw-bolder">ISBN 13</label>
                        <input type="text" class="form-control mt-1  l-sign-input">
                    </div>
                    <div class="col-12 mt-3">
                        <label class="l-card-title fw-bolder">ISBN 10*</label>
                        <input type="text" class="form-control mt-1  l-sign-input">
                    </div>
                    <div class="col-6 mt-3">
                        <label class="l-card-title fw-bolder">Year*</label>
                        <select name="" id="" class="form-control mt-1  l-sign-input">
                            <option value="">2021</option>
                        </select>
                    </div>
                    <div class="col-6 mt-3">
                        <label class="l-card-title fw-bolder">Condition*</label>
                        <select name="" id="" class="form-control mt-1  l-sign-input">
                            <option value="">Brand New</option>
                            <option value="">Used</option>
                            <option value="">Parts not working</option>
                            <option value="">Seller refurbished</option>
                        </select>
                    </div>

                    <div class="col-12 mt-3">
                        <label class="l-card-title fw-bolder">Subtitle</label>
                        <input type="text" class="form-control mt-1  l-sign-input">
                    </div>
                    <div class="col-12 mt-3">
                        <label class="l-card-title fw-bolder">Description</label>
                        <textarea name="" class="form-control mt-1  l-sign-input" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="col-6 mt-3">
                        <label class="l-card-title fw-bolder">Category*</label>
                        <select name="" id="" class="form-control mt-1  l-sign-input">
                            <option value="">Stamps</option>
                        </select>
                    </div>

                    <div class="col-6 mt-3">
                        <label class="l-card-title fw-bolder">Sub Category</label>
                        <select name="" id="" class="form-control mt-1  l-sign-input">
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
                                <input type="text" class="form-control mt-1  l-sign-input">
                            </div>
                            <div class="col-6 mt-3 ">
                                <label class="l-card-title fw-bolder">Buy Now Price*</label>
                                <input type="text" class="form-control mt-1  l-sign-input">
                            </div>
                            <div class="col-6 mt-3 ">
                                <label class="l-card-title fw-bolder">Quantity*</label>
                                <input type="text" class="form-control mt-1  l-sign-input">
                            </div>
                            <div class="col-6 mt-3 ">
                                <label class="l-card-title fw-bolder">Sales Tax</label>
                                <input type="text" class="form-control mt-1  l-sign-input">
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
                                <select name="" id="" class="form-control mt-1  l-sign-input">
                                    <option value="">Free</option>
                                    <option value="">Paid</option>
                                </select>
                            </div>

                            <div class="col-6 mt-3 ">
                                <label class="l-card-title fw-bolder">Shipping Cost*</label>
                                <input type="text" class="form-control mt-1  l-sign-input" placeholder="Rs 500">

                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <label class="l-card-title fw-bolder mt-3">Dimension</label>
                                    <div class="col-4  ">
                                        <input type="text" class="form-control mt-1  l-sign-input" placeholder="height">
                                    </div>
                                    <div class="col-4  ">
                                        <input type="text" class="form-control mt-1  l-sign-input" placeholder="length">
                                    </div>
                                    <div class="col-4  ">
                                        <input type="text" class="form-control mt-1  l-sign-input" placeholder="width">
                                    </div>

                                </div>
                            </div>

                            <div class="col-6 mt-3 ">
                                <label class="l-card-title fw-bolder">Weight</label>
                                <input type="text" class="form-control mt-1  l-sign-input" placeholder="3g">
                            </div>

                            <div class="col-6 mt-3 ">
                                <label class="l-card-title fw-bolder">Package Type</label>
                                <select name="" id="" class="form-control mt-1  l-sign-input">
                                    <option value="">Select</option>
                                    <option value="">Letter</option>
                                    <option value="">Box</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        <div class=" px-2 px-lg-5 ">
                            <div class="col-12 d-grid">
                                <label class="btn l-dark-btn text-white">UPDATE PRODUCT</label>
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