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


    <title>New Tech | Sri Lanka's number one online store</title>
</head>

<body>

    <div class="container-fluid div-body">

        <?php
        require("connection.php");
        include "headerTop.php";
        include "headermiddle.php";

        ?>

        <div class="row px-4 px-lg-5 sticky-top bg-white l-src-top py-2  mb-4">
            <div class="col-12">
                <div class="row">
                    <div class="col-4  d-none d-sm-flex align-items-center ">

                        <span class="breadcrumb-item">Home</span>
                        <span class="breadcrumb-item active">Books</span>


                    </div>

                    <div class="col-12 col-sm-8">
                        <div class="row">
                            <div
                                class="col-9 col-md-6 offset-md-4 d-flex align-items-center justify-content-start justify-content-lg-end ">
                                <!-- <span class=" me-2 btn  d-lg-none  l-model-btn"><i class="bi bi-funnel-fill    "></i></span> -->
                                <a class=" me-2 btn d-lg-none bx-sh-none l-model-btn" data-bs-toggle="offcanvas"
                                    href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                    <i class="bi bi-funnel-fill "></i>
                                </a>

                                <span class="l-filter-text d-none d-sm-flex me-2">SORT</span>
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


        <!-- -----------------------------------------------------------------Results -->




        <div class="row">


            <!-- -----------------------------------------------------------------Mobile Filter -->

            <div class="offcanvas offcanvas-start px-0" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class=" l-chooce-head  text-black fs-4 mt-1" id="offcanvasExampleLabel">FILTER BOOKS</h5>

                    <button type="button" class="btn-close bx-sh-none text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body px-3">

                    <div class="col-12   ">
                        <div class="row  l-filter pb-5 px-2">

                            <div class="col-12 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="l-card-title">BRAND</h5>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">Apple</span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">MSI</span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">Lenevo</span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">Asus</span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">HP</span>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12  pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="l-card-title">CATEGORY</h5>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">Laptops</span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">Mobiles</span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">Tablets</span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">Cameras</span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">Mp3 Players</span>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12  pt-4 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="l-card-title">PRICE RANGE</h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" class="form-control mt-1  l-sign-input"
                                                    placeholder="From">

                                            </div>
                                            <div class="col-6">

                                                <input type="text" class="form-control mt-1  l-sign-input"
                                                    placeholder="To">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="l-card-title">STORAGE</h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 d-flex align-items-center">
                                                <input type="checkbox" class="l-check-input me-2">
                                                <span class="l-filter-text">SSD</span>
                                            </div>
                                            <div class="col-6 d-flex align-items-center">
                                                <input type="checkbox" class="l-check-input me-2">
                                                <span class="l-filter-text">HDD</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="l-card-title">GENARATION</h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center">
                                                <input type="checkbox" class="l-check-input me-2">
                                                <span class="l-filter-text">5th</span>
                                            </div>
                                            <div class="col-4 d-flex align-items-center">
                                                <input type="checkbox" class="l-check-input me-2">
                                                <span class="l-filter-text">6th</span>
                                            </div>
                                            <div class="col-4 d-flex align-items-center">
                                                <input type="checkbox" class="l-check-input me-2">
                                                <span class="l-filter-text">8th</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center">
                                                <input type="checkbox" class="l-check-input me-2">
                                                <span class="l-filter-text"></span>9th</span>
                                            </div>
                                            <div class="col-4 d-flex align-items-center">
                                                <input type="checkbox" class="l-check-input me-2">
                                                <span class="l-filter-text">10th</span>
                                            </div>
                                            <div class="col-4 d-flex align-items-center">
                                                <input type="checkbox" class="l-check-input me-2">
                                                <span class="l-filter-text">11th</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col- pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="l-card-title">RAM</h5>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">2GB</span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">4GB</span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">8GB</span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">16GB</span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">32GB</span>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="l-card-title">COLOUR</h5>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary me-1 l-clr-btn"></button>
                                        <button class="btn btn-success  me-1  l-clr-btn"></button>
                                        <button class="btn btn-info  me-1 l-clr-btn"></button>
                                        <button class="btn btn-dark  me-1 l-clr-btn"></button>
                                        <button class="btn btn-danger  me-1 l-clr-btn"></button>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="l-card-title">SHIPPING</h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 d-flex align-items-center">
                                                <input type="checkbox" class="l-check-input me-2">
                                                <span class="l-filter-text">Free </span>
                                            </div>
                                            <div class="col-6 d-flex align-items-center">
                                                <input type="checkbox" class="l-check-input me-2">
                                                <span class="l-filter-text">World Wide</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="l-card-title">CONDITION</h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 d-flex align-items-center">
                                                <input type="checkbox" class="l-check-input me-2">
                                                <span class="l-filter-text">Brand New</span>
                                            </div>
                                            <div class="col-6 d-flex align-items-center">
                                                <input type="checkbox" class="l-check-input me-2">
                                                <span class="l-filter-text">Used</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="l-card-title">LOCATION</h5>
                                    </div>
                                    <div class="col-12">
                                        <select name="" id="" class="form-control mt-1  l-sign-input">
                                            <option value="">WORLD WIDE</option>
                                            <option value="">INDIA</option>
                                            <option value="">CHINA</option>
                                            <option value="">SRI LANKA</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 pt-4 d-grid">
                                <span class="btn l-dark-btn bg-danger  text-white">Clear FIlters </span>
                            </div>
                            <div class="col-12 pt-1 d-grid">
                                <span class="btn l-dark-btn  text-white">Apply FIlters </span>
                            </div>


                        </div>
                    </div>
                </div>
            </div>



            <!-- -----------------------------------------------------------------Mobile Filter -->




            <div class="col-12 col-lg-3 mb-5 d-none d-lg-flex  ps-5 px-4">
                <div class="row  l-filter pb-5 px-2">

                    <div class="col-12 pt-4">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="l-card-title">CATEGORY</h5>
                            </div>


                            <?php

                            $filterWeb = new stdClass();


                            $catRs = Database::search("SELECT * FROM `category` ");
                            $catnr = $catRs->num_rows;


                            for ($i = 0; $i < $catnr; $i++) {





                                $catData = $catRs->fetch_assoc();

                                $catId = "cat".$catData["id"];

                                // $catfilterWeb->$catId = $catData["id"];
                                $filterWeb->cat[] = $catData["id"];

                                ?>

                                <div class="col-12 d-flex align-items-center">
                                    <input type="checkbox" class="l-check-input me-2" id="<?php echo $catId; ?>">
                                    <span class="l-filter-text">
                                        <?php echo $catData["name"]; ?>
                                    </span>
                                </div>
                                <?php


                            }



                            ?>

                            <!-- 
<div class="col-12 d-flex align-items-center">
                                <input type="checkbox" class="l-check-input me-2">
                                <span class="l-filter-text">Business</span>
                            </div>
                            <div class="col-12 d-flex align-items-center">
                                <input type="checkbox" class="l-check-input me-2">
                                <span class="l-filter-text">Comics</span>
                            </div> -->

                        </div>
                    </div>


                    <div class="col-12  pt-4">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="l-card-title">LANGUAGE</h5>
                            </div>

                            <?php



                            $lanRs = Database::search("SELECT * FROM `lang`");
                            $lanNr = $lanRs->num_rows;

                            for($i = 0; $i < $lanNr; $i++){

                                $lanData = $lanRs->fetch_assoc();

                                $langId = "lang".$lanData["id"];


                                $filterWeb->lang[] = $lanData["id"];





                                ?>

<div class="col-6 d-flex align-items-center">
                                <input type="checkbox" class="l-check-input me-2" id="<?php echo $langId; ?>">
                                <span class="l-filter-text"><?php echo $lanData["name"]; ?></span>
                            </div>


<?php 

                                
                            }
 

                            ?>


                             


                        </div>
                    </div>


                    <div class="col-12  pt-4 pt-4">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="l-card-title">PRICE RANGE</h5>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control mt-1  l-sign-input" placeholder="From" id="prfromweb">

                                    </div>
                                    <div class="col-6">

                                        <input type="text" class="form-control mt-1  l-sign-input" placeholder="To" id="prtoweb">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-12 pt-4">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="l-card-title">RATINGS</h5>
                            </div>
                            <div class="col-12">
                                <div class="row">
      
                                    <div class="col-12 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star-fill me-2 l-ratings"></i>
                                        <span class="l-ratings text-black">5.0</span>
                                    </div>
                                    <div class="col-12 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star me-2 l-ratings"></i>

                                        <span class="l-ratings text-black">4.0</span>
                                    </div>
                                    <div class="col-12 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star me-1 l-ratings"></i>
                                        <i class="bi bi-star me-2 l-ratings"></i>

                                        <span class="l-ratings text-black">3.0</span>
                                    </div>
                                    <div class="col-12 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star-fill me-1 l-ratings"></i>
                                        <i class="bi bi-star me-1 l-ratings"></i>
                                        <i class="bi bi-star me-1 l-ratings"></i>
                                        <i class="bi bi-star me-1 l-ratings"></i>

                                        <span class="l-ratings text-black">2.0</span>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 pt-4">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="l-card-title">PRICE</h5>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">Free</span>
                                    </div>
                                    <div class="col-4 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2">
                                        <span class="l-filter-text">Paid</span>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>



                    <div class="col-12 pt-4">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="l-card-title">SHIPPING</h5>
                            </div>
                            <div class="col-12">
                                <div class="row">


                    <?php 




                    $shipRs = Database::search("SELECT * FROM `shippingtype`");
                    $shipNr = $shipRs->num_rows;

                    for ($i=0; $i < $shipNr; $i++) { 

                        $shipData = $shipRs->fetch_assoc();
                    

                        $shipid = "ship".$shipData["id"];

                        $filterWeb->ship[] = $shipData["id"];



                        ?>

                    
                    <div class="col-6 d-flex align-items-center">
                         <input type="checkbox" class="l-check-input me-2" id="<?php echo $shipid;?>">
                        <span class="l-filter-text"><?php echo $shipData["name"]?></span>
                     </div>
                    
                    
                        <?php 

                    
                    
                    }


?>

                                   
                                   
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-12 pt-4">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="l-card-title">CONDITION</h5>
                            </div>
                            <div class="col-12">
                                <div class="row">





                                <?php 





$conRs = Database::search("SELECT * FROM `condition`");
$conNr = $conRs->num_rows;

for ($i=0; $i < $conNr; $i++) { 

    $conData = $conRs->fetch_assoc();

    $conId = "con".$conData["id"];

    $filterWeb->con[] = $conData["id"];






    ?>


                                    <div class="col-6 d-flex align-items-center">
                                        <input type="checkbox" class="l-check-input me-2" id="<?php echo $conId;?>">
                                        <span class="l-filter-text"><?php echo $conData["name"];?>  </span>
                                    </div>

 

    <?php 



}


?>









                                    
                                     
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 pt-4">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="l-card-title">LOCATION</h5>
                            </div>
                            <div class="col-12">
                                <select name="" id="locat" class="form-control mt-1  l-sign-input">

                                    <option value="">SRI LANKA</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 pt-4 d-grid">
                        <span class="btn l-dark-btn bg-danger  text-white" >Clear FIlters </span>
                    </div>
                    <div class="col-12 pt-1 d-grid">
                        <?php 
                        




                        $jsonFilterWeb = json_encode($filterWeb);
                        
 
                        // echo $jsonFilterWebvar;
                        
                        ?>
                        <span class="btn l-dark-btn text-white" onclick='applyFiters(<?php echo $jsonFilterWeb;?>);'>Apply Filters </span>

                    </div>


                </div>
            </div>

            <div class="col-12 col-lg-9">
                <div class="row  mt-4 p-0  px-1  pe-lg-5   " id="rsltbx">



                    <?php


if (isset($_GET["search"])) {
    $searchTxt = $_GET["search"];

    
if(empty($searchTxt)){
    $prLoad = Database::search("SELECT * FROM `product`");

}else{
    $prLoad = Database::search("SELECT * FROM `product` WHERE `title` LIKE '%$searchTxt%' OR `isbn_13`
     LIKE '%$searchTxt%' OR `isbn_10` LIKE '%$searchTxt%' OR `year` LIKE '%$searchTxt%' OR `subtitle` LIKE '%$searchTxt%' OR 
     `description` LIKE '%$searchTxt%' OR `author` LIKE '%$searchTxt%' ");


}


} else {
     
    $prLoad = Database::search("SELECT * FROM `product`");
 

}

  
                    $prLoadNr = $prLoad->num_rows;

                    for ($i = 0; $i < $prLoadNr; $i++) {
                        $prLoadData = $prLoad->fetch_assoc();



                        ?>



                        <div class="col col-6 col-lg col-lg-3 mt-2 mb-3" onclick="window.location = 'singleProductView.php?id=' + <?php echo $prLoadData["id"];?>;">
                            <div class="l-card">

                                <img src="./Images/bookbackground.jpg" class="l-card-imag w-100" alt="">
                                <div class=" pt-0 pb-3 pt-3 px-2 px-md-3 ">
                                    <div class="l-card-body text-center">
                                        <h5 class="l-card-title  ">
                                            <?php echo $prLoadData["title"]; ?>
                                        </h5>
                                        <label class="l-para2">
                                            <?php echo $prLoadData["author"]; ?>
                                            <br>  |
                                            <?php echo $prLoadData["year"]; ?>
                                        </label> <br>
                                        <label class="l-para2 text-white bg-black py-0 px-1 me-1 rounded">4 Lang</label>
                                        <label class="l-para2 text-white bg-warning py-0 px-1 me-1 rounded">Free PDF</label>
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
                                                    <?php echo $prLoadData["buyNow"]; ?>
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

                    <div class="col col-6 col-lg col-lg-3 mt-2   mb-3">
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


        <!-- -----------------------------------------------------------------Results -->

















        <!-- -----------------------------------------------------------------Footer -->
        <?php include "footer.php"; ?>
        <!-- -----------------------------------------------------------------Footer -->




    </div>


    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>

</body>

</html>