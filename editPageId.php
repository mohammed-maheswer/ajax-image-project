<?php
$conn = mysqli_connect("localhost", "root", "qwerty", "basic_crud") or die("Connection Failed");
// print_r($_FILES);
// print_r($_POST);
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["address"]) && isset($_POST["id"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $id = $_POST["id"];

    if (!empty($_FILES['image']['name'])) {
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'webp');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $query = "UPDATE crud SET name= '$name',address = '$address',email = '$email',image = '$imgContent'  WHERE id = '$id'";
            if (mysqli_query($conn, $query)) {
                echo "Data Edited Successfully";
                exit;
            }
        } else {
            echo 0;
            exit;
        };
    } else {
        $query = "UPDATE crud SET name= '$name',address = '$address',email = '$email' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo "Data Edited Successfully";
        } else {
            echo mysqli_error($conn);
        }
    }
} else {
    echo "something went wrong";
}
