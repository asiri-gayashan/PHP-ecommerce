<!DOCTYPE html>
<html lang="en">

<?php

session_start();

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


    <title>Cart | New Tech</title>
</head>

<body>

    <div class="container-fluid">

        <?php

        include "headerTop.php";
        include "headermiddle.php";

        ?>


        <div class="row mt-5 mb-5 px-2 px-md-5">
            <div class="col-12 col-lg-9  pe-md-4">
                <div class="row ">
                    <div class="col-12">
                        <label class="l-head-title fs-4 fw-bold">Cart</label>
                    </div>
                    <div class="col-12  mt-4 ">
                        <div class="row d-none d-lg-flex">
                            <div class="col-5 ">
                                <label class="l-side-card-title fw-bold ">BOOK</label>
                            </div>
                            <div class="col-2">
                                <label class="l-side-card-title  fw-bold">PUBLISHER</label>
                            </div>
                            <div class="col-2">
                                <label class="l-side-card-title fw-bold ">QUANTITY</label>
                            </div>
                            <div class="col-2">
                                <label class="l-side-card-title  fw-bold">PRICE</label>
                            </div>



                        </div>
                        <div class="row mt-1 mt-lg-3">



                            <?php


                            require "connection.php";

                            if (isset($_SESSION["u"])) {

                                $rscart = Database::search("SELECT `cart`.`id`, `shipping`.`cost` AS 'shippingCost',
                                 `shipping`.`stypeId`, `cart`.`qty`, `product`.`title`, `product`.`author`, `publisher`.`name` AS 'pubName',
                                  `product`.`buyNow`, `product`.`qty` AS 'stockQty' FROM `cart` INNER JOIN `product`
                                   ON `cart`.`product_id` = `product`.`id` INNER JOIN `publisher` ON `product`.`publisher_id` = 
                                   `publisher`.`id` INNER JOIN `shipping` ON `product`.`id`= `shipping`.`product_id` WHERE `cart`.`user_email` 
                                   = '" . $_SESSION["u"]["email"] . "'");
                                $nrcart = $rscart->num_rows;





                                if($nrcart > 0){

                                    $qtyarry = array();



                                $subtotal = 0;

                                for ($i = 0; $i < $nrcart; $i++) {

                                    $datacart = $rscart->fetch_assoc();

                                    if($datacart["stockQty"] == 0){
                                        $subtotal = $subtotal + 0;
                                    }else{
                                        $subtotal = $subtotal + ($datacart["buyNow"] * $datacart["qty"]);
                                    }




                                    ?>





                                    <div class="col-12 mb-2">
                                        <div class="row l-side-card g-0 py-3 px-2 mb-1 mb-lg-3 d-flex ">
                                            <div class="col-12 col-lg-5 d-flex align-items-center mb-2">
                                                <img src="./Images/bookbackground.jpg" class="img-fluid w-25 me-3 rounded-start"
                                                    alt="...">
                                                <div class="col d-block">
                                                    <label class="l-side-card-title  ">
                                                        <?php echo $datacart["title"]; ?>
                                                    </label>
                                                    <h5 class="l-para2  ">
                                                        <?php echo $datacart["author"]; ?>
                                                    </h5>
                                                </div>
                                                <div>
                                                    <span class="btn l-model-btn d-md-none"><i class="bi bi-x-lg"></i></span>

                                                </div>
                                            </div>

                                            <div class="col-12 col-md-4 ps-2 my-2  d-flex d-md-none align-items-center  ">
                                                <label
                                                    class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Sinhala</label>
                                                <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free
                                                    Delivery</label>
                                                <label class="l-para2 text-white bg-primary py-0 px-1 me-1 rounded">In
                                                    Stock</label>
                                            </div>

                                            <div class="col-4 col-lg-2 ps-2 d-flex align-items-center  ">
                                                <label class="l-side-card-title  overflow-hidden">
                                                    <?php echo $datacart["pubName"]; ?>
                                                </label>
                                            </div>
                                            <div
                                                class="col-4 col-lg-2 ps-3 pe-2 d-flex align-items-center overflow-hidden  d-grid">

                                                <?php

                                                if ($datacart["stockQty"] <= 0) {




                                                    ?>
 
                         <input type="number" class="form-control bx-sh-none l-side-card-title" value="0"
                                                        id="qty" disabled>



                                                    <?php


                                                } else {


                                                    $qtyid = "qty" . $datacart["id"];
                                                    array_push($qtyarry, $datacart["id"]);
                                                    // $qtyarry[$qtyid] = $datacart["id"];
                                        


                                                    ?>


                                                    <input type="number" class="form-control bx-sh-none l-side-card-title"
                                                        value="<?php echo $datacart["qty"]; ?>" id="<?php echo $qtyid; ?>">




                                                    <?php

                                                }


                                                ?>


                                            </div>
                                            <div class="col-3 col-lg-2 ps-4 d-flex align-items-center ">
                                                <label class="l-side-card-title  ">Rs
                                                    <?php echo $datacart["buyNow"]; ?>
                                                </label>
                                            </div>
                                            <div class="col-1  d-flex align-items-center text-center">
                                                <span class="btn l-model-btn d-none d-md-flex"
                                                    onclick='deleteCart(<?php echo $datacart["id"]; ?>);'><i
                                                        class="bi bi-x-lg"></i></span>
                                            </div>

                                            <div class="col-12 ps-2 my-2  d-none d-md-flex align-items-center  ">

                                                <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Sinhala
                                                </label>
                                                <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">
                                                    Free Delivery
                                                </label>

                                                <?php

                                                if ($datacart["stockQty"] <= 0) {


                                                    ?>

                                                    <label class="l-para2 text-white bg-danger py-0 px-1 me-1 rounded">Out of
                                                        Stock</label>


                                                    <?php


                                                } else {

                                                    ?>

                                                    <label class="l-para2 text-white bg-primary py-0 px-1 me-1 rounded">In
                                                        Stock</label>

                                                    <?php

                                                }


                                                ?>




                                            </div>
                                        </div>
                                    </div>








                                    <?php













                                }




                                ?>








                                <div class="col-12 mt-3">
                                    <div class="row">
                                        <div class="col-12 col-md-8 ">


                                        <?php
                                        
                                        if($nrcart > 0){

                                            ?>

<label class="btn  text-black bg-warning px-5 py-2" onclick='updateCart(<?php echo json_encode($qtyarry); ?>);' > Update Cart</label>


                                            <?php

                                        } else {
                                        
                                            ?>

<label class="btn  text-black bg-warning   px-5 py-2" onclick='location.replace("index.php");' >Back to Shop</label>

                                            <?php 
                                        
                                        }
                                        
                                        
                                        ?>


                                          

                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="row text-end text-md-start">
                                                <div class="col-12 d-flex">
                                                    <div class="col">
                                                        <span class="l-para fw-bold ">Subtotal</span>
                                                    </div>
                                                    <div class="col">
                                                        <label class="l-side-card-title  fw-bolder">Rs
                                                            <?php echo $subtotal; ?>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-2 d-flex">
                                                    <div class="col">
                                                        <span class="l-para fw-bold ">Shipping</span>
                                                    </div>
                                                    <div class="col">
                                                        <label class="l-side-card-title  fw-bolder">Free</label>
                                                    </div>
                                                </div>
                                                <hr class="mt-2">
                                                <div class="col-12 d-flex">
                                                    <div class="col">
                                                        <span class=" l-side-card-title  fs-5  fw-bold  ">Total</span>
                                                    </div>
                                                    <div class="col">
                                                        <label class="l-side-card-title fs-5 fw-bolder">Rs
                                                            <?php echo $subtotal; ?>
                                                        </label>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>








                                <?php

                                } else {
                                
                                    ?>


                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row ">
    
    
                                                <div class="col-12 offset-4 mt-5">
                                                    <label class="l-head-title mx-auto fs-4 fw-bold me-4">No items
                                                        found...</label>
                                                    <a class="btn l-dark-btn  text-white" href="./search.php">Back to shop</a>
    
                                                </div>
    
    
                                            </div>
                                        </div>
                                    </div>
    
    
    
                                    <?php
                                
                                }





                                







                            } else {


                                ?>


                                <div class="row">
                                    <div class="col-12">
                                        <div class="row ">


                                            <div class="col-12 offset-4 mt-5">
                                                <label class="l-head-title mx-auto fs-4 fw-bold me-4"> You want to login </label>
                                                
                                                <a class="btn  text-black bg-warning   px-5 py-2" href="./signIn.php">Login or Sign Up</a>

                                            </div>


                                        </div>
                                    </div>
                                </div>



                                <?php
                            
                              



                            }


                            // $rscart = Database::search("SELECT * FROM `cart` WHERE `user_email` = '".  ."'");
                            





                            ?>














                            <!--                           

                            <div class="col-12 mb-2">
                                <div class="row l-side-card g-0 py-3 px-2 mb-1 mb-lg-3 d-flex ">
                                    <div class="col-12 col-lg-5 d-flex align-items-center mb-2">
                                        <img src="./Images/bookbackground.jpg" class="img-fluid w-25 me-3 rounded-start" alt="...">
                                        <div class="col d-block">
                                            <label class="l-side-card-title  ">ගම් පෙරළිය</label>
                                            <h5 class="l-para2  ">Martin Wickramasinghe</h5>
                                        </div>
                                        <div >
                                            <span class="btn l-model-btn d-md-none"><i class="bi bi-x-lg"></i></span>

                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 ps-2 my-2  d-flex d-md-none align-items-center  ">
                                        <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Sinhala</label>
                                        <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free Delivery</label>
                                        <label class="l-para2 text-white bg-primary py-0 px-1 me-1 rounded">In Stock</label>           
                                    </div>

                                    <div class="col-4 col-lg-2 ps-2 d-flex align-items-center ">
                                        <label class="l-side-card-title  overflow-hidden">Malpiyali</label>
                                    </div>
                                    <div class="col-4 col-lg-2 ps-3 pe-2 d-flex align-items-center overflow-hidden  d-grid">
                                        <input type="number" class="form-control bx-sh-none l-side-card-title">
                                    </div>
                                    <div class="col-3 col-lg-2 ps-4 d-flex align-items-center ">
                                        <label class="l-side-card-title  ">Rs 500</label>
                                    </div>
                                    <div class="col-1  d-flex align-items-center text-center">
                                        <span class="btn l-model-btn d-none d-md-flex"><i class="bi bi-x-lg"></i></span>
                                    </div>

                                    <div class="col-12 ps-2 my-2  d-none d-md-flex align-items-center  ">
                                        <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">Sinhala</label>
                                        <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free Delivery</label>
                                        <label class="l-para2 text-white bg-primary py-0 px-1 me-1 rounded">In Stock</label>           

                                    </div>
                                </div>
                            </div>
 
 -->









                        </div>
                    </div>







                </div>
            </div>
            <div class="col-12 col-lg-3 l-payemt-info ">
                <div class="row py-3 px-3">
                    <div class="col-12">
                        <label class="l-head-title fs-4 fw-bold">Payment Info</label>
                    </div>
                    <div class="col-12 mt-4">
                        <label class="l-para">Payment Method</label>
                        <div class="form-check mt-2">
                            <input class="form-check-input me-3" type="radio" name="payement" id="creditCard">
                            <label class="l-side-card-title  fw-bold" for="creditCard"><i
                                    class="bi bi-credit-card-fill pe-2"></i>Credit Card</label>
                        </div>
                        <div class="form-check mt-1">
                            <input class="form-check-input me-3" type="radio" name="payement" id="paypal" checked>
                            <label class="l-side-card-title  fw-bold" for="paypal"><i
                                    class="bi bi-paypal pe-2"></i>PayPal</label>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <label class="l-para">Name on card</label> <br>
                        <label class="l-side-card-title  fw-bold mt-1">Asiri Gayashan</label>

                    </div>

                    <div class="col-12 mt-4">
                        <label class="l-para">Card Number</label> <br>
                        <label class="  fw-bold mt-1 d-flex align-items-center">
                            <i class="bi  bi-circle-fill"></i>
                            <i class="bi  bi-circle-fill"></i>
                            <i class="bi  bi-circle-fill"></i>
                            <i class="bi  bi-circle-fill me-2"></i>

                            <i class="bi  bi-circle-fill"></i>
                            <i class="bi  bi-circle-fill"></i>
                            <i class="bi  bi-circle-fill"></i>
                            <i class="bi  bi-circle-fill  me-2"></i>

                            <i class="bi  bi-circle-fill"></i>
                            <i class="bi  bi-circle-fill"></i>
                            <i class="bi  bi-circle-fill"></i>
                            <i class="bi  bi-circle-fill me-2"></i>

                            <label class="l-side-card-title  fw-bold mt-1">5011</label>

                        </label>

                    </div>

                    <div class="col-12 mt-4">
                        <label class="l-para">Expiration Date</label> <br>
                        <div class="row mt-2">
                            <div class="col">
                                <input type="number" class="form-control l-side-card-title" placeholder="mm">
                            </div>

                            <div class="col">
                                <input type="number" class="form-control l-side-card-title" placeholder="yyyy">
                            </div>

                            <div class="col">

                                <input type="text" class="form-control l-side-card-title" placeholder="CVV">
                            </div>
                        </div>

                    </div>

                    <div class="col-12 mt-5 d-grid">
                        <label class="btn l-dark-btn  text-white">Check Out</label>
                    </div>


                </div>
            </div>
        </div>


        <?php
        include "footer.php";
        ?>


    </div>

    <script src="./bootstrap.bundle.js"></script>
    <script src="./bootstrap.min.js"></script>
    <script src="./script.js"></script>

</body>

</html>