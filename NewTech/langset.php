 

<span class="l-para2 my-4   mx-2 text-white bg-black py-1 px-2 me-1 rounded " id="<?php echo "la".$_POST["langid"]; ?>">
    <?php echo $_POST["langname"]; ?>
    <i class="btn p-0 bi ms-1 text-white l-para2 bi-x-circle" onclick='removeLang("<?php echo "la".$_POST["langid"]; ?>");'></i>
</span>