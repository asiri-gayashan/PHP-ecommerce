<?php 

    require "connection.php";

    $srctxt = $_GET["search"];

    
    if(isset($srctxt)){

        if(empty($srctxt)){
            $prLoad = Database::search("SELECT * FROM `product`");
          


        }else{
    
            $prLoad = Database::search("SELECT * FROM `product` WHERE `title` LIKE '%$srctxt%' OR `isbn_13`
            LIKE '%$srctxt%' OR `isbn_10` LIKE '%$srctxt%' OR `year` LIKE '%$srctxt%' OR `subtitle` LIKE '%$srctxt%' OR 
            `description` LIKE '%$srctxt%' OR `author` LIKE '%$srctxt%' ");

    
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

 


    } 




    

    // $srcRs = Database::search("");





?>