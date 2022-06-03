<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL Product</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    card {
        float: right;
        margin: 20px;
    }

    .card img {
        width: 100%;
        height: 200px;
        ;
    }

    main {
        width: 60%;
    }
    </style>
</head>

<body>
    <center>
        <h3>All Products</h3>
    </center>
    <?php
    include('config.php');
  $result= mysqli_query($con,"SELECT * FROM prod");
    while($row =mysqli_fetch_array($result)){
    echo "
    <center>
    <main>
            <div class='card' style='width: 18rem;'>
            <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[price] </p>
            <a href='#' class='btn btn-danger'>Edit product</a>
            <a href='#' class='btn btn-primary'>Delet product</a>
                 </div>
            </div>
        </main>
    ";
    } ;
    ?>
</body>

</html>