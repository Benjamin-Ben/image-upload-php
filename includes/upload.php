<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    //print_r($file);

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0){
            if ($fileSize < 500000){
                include_once('dbc.php');

                $fileNewName = uniqid('', true) . '.' . $fileActualExt;
                $fileDestination = 'images/' . $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);

                $sql = "INSERT INTO images (image)
                VALUES ('$fileDestination');";
                mysqli_query($conn, $sql);

                header('Location: ../index.php?upload_success');
            } else {
                echo 'Your image is too BIG';
            }
        }else{
            echo 'There was an error uploading your image';
        }
    } else {
        echo 'You cannot upload files of this type';
    }
} else {
    header('Location: index.php?you_have_to_submit');
}