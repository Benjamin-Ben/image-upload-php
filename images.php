<?php 
    include_once('./includes/dbc.php');
?>

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
    <section>
    <h1>ALL IMAGES</h1>
        <?php 
            $sql = "SELECT images.image FROM image_upload.images;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    echo '<img src="./includes/' . $row['image'] . '">';
                }
            }
        ?>
    </section>
</body>
</html>