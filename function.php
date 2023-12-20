<?php 
    include("config.php");
    session_start();

    function data_add($iname, $email, $mobile, $tag){
        $con = Connection();


        

        // $insert_data = "INSERT INTO data_tbl(iname,email,moblie,tag,add_at)VALUES('$iname','$email','$mobile','$jsonData', NOW())";
        // $insert_data_result = mysqli_query($con, $insert_data);
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
              <p>Tag</p>";

              $tags=$row['tag'];
              $decode_data = json_decode($tags, true);

              if ($decode_data !== null && is_array($decode_data)) {
                foreach ($decode_data as $tg){
                    $view_data .= "  <button class='btn btn-primary'>".$tg."</button>";
                }    
              } else {
                echo "Error decoding JSON data ". json_last_error_msg();
            }
              $view_data .= "</div>
          </div><br>

           ";

           echo $view_data;
        }        
    }

    function search_data($data){
        $con = Connection();
        
        // echo $data;

        $_SESSION['search_data'] = $data;

    }

    function data_by_search(){
        $con = Connection();

        $search_data = strval($_SESSION['search_data']);
        
        $select_tag = "SELECT * FROM data_tbl WHERE tag = '$search_data'";
        $select_tag_result = mysqli_query($con, $select_tag);
        $tag_nor = mysqli_num_rows($select_tag_result);

        if($tag_nor == 0){
            echo "<p style='color:red'>No Recodes Found</p>";
        }

        while($row = mysqli_fetch_assoc($select_tag_result)){
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

?>