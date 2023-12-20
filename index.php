<?php 
    include("header.php");
?>

<div class="container">
    <br><br>
    <h2>Searching Test</h2>
    <hr>
    <a href="view_data.php"><button class="btn btn-success">Search Data</button></a>
    <br><br>
    <div class="card">
        <div class="card-header">Data</div>
        <div class="card-body">     
            <?php 
                include("function.php");

                if(isset($_POST['add_data'])){
                    $result = data_add($_POST['i_name'],$_POST['email'],$_POST['mobile'],$_POST['i_tag']);
                    echo $result;
                }
            
            ?>
            <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="post">
                <label for="name">Name : </label>
                <input type="text" name="i_name" id="" class="form-control" required><br>

                <label for="email">Email : </label>
                <input type="email" name="email" id="" class="form-control" required><br>

                <label for="mobile">Mobile : </label>
                <input type="text" name="mobile" id="" class="form-control" required><br>

                <label for="tag">Tag : </label>
                <input type="text" name="i_tag" id="" class="form-control" required><br>

                <div class="row">
                    <div class="col-lg-6">
                        <input type="reset" value="Clear" class="btn btn-secondary" style="width:100%;">
                    </div>
                    <div class="col-lg-6">
                        <input type="submit" value="Add Data" class="btn btn-success" name="add_data" style="width:100%;">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



