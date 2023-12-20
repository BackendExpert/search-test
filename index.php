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
    <div class="card">
        <div class="card-header">Data Insert</div>
        <div class="card-body">
            <form action="<?php ech0($_SERVER["PHP_SELF"]); ?>" method="POST">
                <label for="nmae">Name : </label>
                <input type="text" name="iname" id="" class="form-control"><br>

                <label for="emial">Email : </label>
                <input type="email" name="email" id="" class="form-control"><br>

                <label for="moblie">Moblie : </label>
                <input type="text" name="mobile" id="" class="form-control"><br>

                <label for="tag">Tag : </label>
                <input type="text" name="i_tag" id="" class="form-control"><br>
            </form>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>