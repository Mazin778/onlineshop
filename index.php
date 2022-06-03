<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <center>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <h2>Shop Online</h2>
                <img src="images/laptop1.jpg" alt="logo" width='450px' ; <input type="text" name='name'>
                <br>
                <input type="text" name='name'>
                <br>
                <input type="text" name='price'>
                <br>
                <input type="file" id="file" name="image" style='display:none;'>
                <label for="file">Choose Image</label>
                <button name="upload">upload product</button>
                <br><br>
                <a href="products.php">Show ALL Products</a>
            </form>
        </div>
        <p>Developed By Mazin</p>
    </center>
</body>

</html>