
<div class="row l-padding  h-header-bottoom">
    <div class="col-5 d-lg-none ">
        <a href="./index.php" class="h-logo text-decoration-none text-black ">Ashirvadha</a>
    </div>
    <div class="col-3  d-none d-lg-flex ">
        <a href="./index.php" class="h-logo-lg text-decoration-none text-black ">Ashirvadha</a>

    </div>
    <div class="d-none d-lg-flex col-lg-6">
        <div class="input-group  ">
            <input type="text" class="form-control input-search-lg " placeholder="Search here..."
                aria-label="Recipient's username" aria-describedby="basic-addon2"  id="searchTxt" value="<?php
                
               

                ?>">
            <span class="input-group-text px-3" id="basic-addon2" onclick="searchRedirect();"><i
                    class="bi bi-search"></i></span>
        </div>
    </div>
    <div class="col-7 col-lg-3 text-end">




        <a type="button"
            href="<?php if (isset($_SESSION["u"])) {
            echo "./userprofile.php";
        } else {
            echo "./signIn.php";
        } ?>"
            class="ms-lg-3 h-btm-icons link-dark position-relative">
            <i class="bi bi-person"></i>
            <!-- <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        9
                        <span class="visually-hidden">unread messages</span>
                    </span> -->
        </a>
        <a type="button" href="wishlist.php" class="ms-lg-3  link-dark  h-btm-icons position-relative">
            <i class="bi bi-heart  "></i>

           


            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        
            <?php 
            
            $wrs = Database::search("SELECT COUNT(`id`) FROM `wishlist` WHERE `user_email` = 'nayana@gmail.com'");
            echo $wrs->fetch_assoc()["COUNT(`id`)"];
            
            ?>
            
                        <span class="visually-hidden">unread messages</span>
                    </span>
        </a>
        <a type="button" href="cart.php" class=" ms-lg-3  link-dark  h-btm-icons position-relative">
            <i class="bi bi-cart3 "></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            <?php 
            
            $crs = Database::search("SELECT COUNT(`id`) FROM `cart` WHERE `user_email` = 'nayana@gmail.com'");
            echo $crs->fetch_assoc()["COUNT(`id`)"];
            
            ?>
                <span class="visually-hidden">unread messages</span>
            </span>
        </a>
    </div>
</div>

<div class="row d-lg-none  l-padding  py-2 l-mobile-search">
    <div class="col-12 ">
        <div class="input-group  ">
            <input type="text" class="form-control input-search-lg" placeholder="Search here..."
                aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text px-3" id="basic-addon2"><i class="bi bi-search"></i></span>
        </div>
    </div>
</div>