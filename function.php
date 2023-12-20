<?php 
    include("config.php");

    function data_add($iname, $email, $mobile, $tag){
        $con = Connection();

        // echo $iname, $email, $mobile, $tag;

        $insert_data = "INSERT INTO data_tbl(iname,email,moblie,tag,add_at)VALUES('$iname','$email','$mobile','$tag', NOW())";
        $insert_data_result = mysqli_query($con, $insert_data);
    }

    function all_data(){
        $con = Connection();

        $select_all_data = "SELECT * FROM data_tbl";
        $select_all_data_result = mysqli_query($con, $select_all_data);

        while($row = mysqli_fetch_assoc($select_all_data_result)){
            $view_data = "
            <div class='card'>
            <div class='card-header'>"
              .$row['iname'].
            "</div>
            <div class='card-body'>
              <h5 class='card-title'>".$row['email']."</h5>
              <p class='card-text'>".$row['moblie']."</p>
              <p>Tag</p>
              <button class='btn btn-primary'>".$row['tag']."</button>
            </div>
          </div><br>

           ";

           echo $view_data;
        }        
    }

    function search_data($data){
        $con = Connection();
        
        // echo $data;

        

    }

?>