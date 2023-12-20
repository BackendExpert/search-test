<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <br><br>
    <h2>Searching Test</h2>
    <hr>
    <a href=""><button class="btn btn-success">Search Data</button></a>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>