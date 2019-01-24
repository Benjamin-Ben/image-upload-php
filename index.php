<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Images</title>

    <style>
        header a{
            font-size:30px;
            margin-right:7%;
        }

        h1{
            font-size:50px;
            text-align:center;
            font-family:"arial black", arial, sans-serif;
        }

        img{
            width:25%;
        }
    </style>
</head>
<body>
<header>
    <a href="index.php">Upload images</a>
    <a href="images.php">Watch images</a>
</header>
<br><br><br>
    <form action="./includes/upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">Upload image</button>
    </form>
</body>
</html>