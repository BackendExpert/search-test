<?php 
    include("header.php");    
    include("function.php");
?>

<div class="container">
    <br><br>
    <h2>Search Test</h2>
    <hr>
    <a href="index.php"><button class="btn btn-primary">Add Data</button></a>
    <br><br>

    <?php 
        if(isset($_POST['tag_search'])){
            $result = search_data($_POST['search_tag']);
            echo $result;
        }
    ?>

    <form action="" method="post">
        <div class="row">
            <div class="col-lg-8">
                <input type="text" name="search_tag" id="" class="form-control" placeholder="Search By Tag" required>
            </div>
            <div class="col-lg-4">
                <input type="submit" value="Search" name="tag_search" class="btn btn-success" style="width:100%;">
            </div>
        </div>
    </form>
    <hr>
    <br>

    <?php 
        all_data();
    ?>


</div>