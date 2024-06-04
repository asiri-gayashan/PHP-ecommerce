<?php

require "connection.php";

// echo $_POST["d"];

$filterObj = json_decode($_POST["d"]);

$srctxt = $filterObj->searctxt;
$fromPrice = str_replace(' ', '', $filterObj->fromPrice);
$toPrice = str_replace(' ', '', $filterObj->toPrice);
$cat = $filterObj->cat;
// $lang = $filterObj->lang;
// $ship = $filterObj->ship;
$con = $filterObj->con;

$search = "SELECT * FROM `product` ";
$sq = 0;


if(!empty($srctxt)){
    $sq = 1;
    $search = $search ."  WHERE `title` LIKE '%$srctxt%' OR `isbn_13`
    LIKE '%$srctxt%' OR `isbn_10` LIKE '%$srctxt%' OR `year` LIKE '%$srctxt%' OR `subtitle` LIKE '%$srctxt%' OR 
    `description` LIKE '%$srctxt%' OR `author` LIKE '%$srctxt%'   ";
}


if (!empty($fromPrice) & !empty($toPrice)) {
    // echo "hari";
    if(!(is_numeric($fromPrice) && is_numeric($toPrice))){
    }else if(!(($fromPrice < 10000) && ($toPrice < 10000))){
    }else if(!($fromPrice < $toPrice)){
    }else{

        if($sq == 0){
            $sq = 1;
            $search = $search . " WHERE `buyNow` BETWEEN '".$fromPrice."' AND '".$toPrice."' ";
        }else{
            $search = $search . " AND `buyNow` BETWEEN '".$fromPrice."' AND '".$toPrice."' ";

        }


    }

}



if ($sq == 0 && (count($cat)>0)) {

    $sq == 1;
    $search = $search . " WHERE ";


    for ($i = 0; $i < count($cat); $i++) {

        // echo $cat[$i] . "               ";  

        if($i == (count($cat) - 1)){
            $search = $search . " `category_id` = '".$cat[$i]."' ";
        }else{
            $search = $search . " `category_id` = '".$cat[$i]."' OR ";
        }


    }


} else if($sq == 1 && (count($cat)>0)) {

    $search = $search . " AND ";

    for ($i = 0; $i < count($cat); $i++) {

        // echo $cat[$i] . "               ";  

        if($i == (count($cat) - 1)){
            $search = $search . " `category_id` = '".$cat[$i]."' ";
        }else{
            $search = $search . " `category_id` = '".$cat[$i]."' OR ";
        }


    }



}

 

 

if ($sq == 0 && (count($con)>0)) {

    $sq == 1;
    $search = $search . " WHERE ";


    for ($i = 0; $i < count($con); $i++) {

        // echo $cat[$i] . "               ";  

        if($i == (count($con) - 1)){
            $search = $search . " `condition_id` = '".$con[$i]."' ";
        }else{
            $search = $search . " `condition_id` = '".$con[$i]."' OR ";
        }


    }


} else if($sq == 1 && (count($con)>0)) {

    $search = $search . " AND ";

    for ($i = 0; $i < count($con); $i++) {


        if($i == (count($con) - 1)){
            $search = $search . " `condition_id` = '".$con[$i]."' ";
        }else{
            $search = $search . " `condition_id` = '".$con[$i]."' OR ";
        }


    }



}


// echo $search;
 


$prLoad = Database::search($search);



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