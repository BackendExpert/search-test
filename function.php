<?php 
    include("config.php");

    function data_add($iname, $email, $mobile, $tag){
        $con = Connection();

        // echo $iname, $email, $mobile, $tag;

        $insert_data = "INSERT INTO data_tbl(iname,email,moblie,tag,add_at)VALUES('$iname','$email','$mobile','$tag', NOW())";
        $insert_data_result = mysqli_query($con, $insert_data);
    }

?>