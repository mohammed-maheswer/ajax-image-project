<?php
$conn = mysqli_connect("localhost", "root", "qwerty", "basic_crud") or die("Connection Failed");
// if (isset($_FILES['image']['name'])) {
//     $filename = $_FILES['image']['name'];
//     $location = "upload/" . $filename;
//     $uploadok = 1;
//     $imagefiletype = pathinfo($location, PATHINFO_EXTENSION);
//     $valid_extension = array('jpg', 'jpeg', 'png');
//     if (!in_array(strtolower($imagefiletype), $valid_extension)) {
//         $uploadOk  = 0;
//     }
//     if ($uploadok == 0) {
//         echo 0;
//     } else {
//         if (move_uploaded_file($_FILES['image']['tmp_name'], $location)) {
//             echo $location;
//         } else {
//             echo 0;
//         }
//     }
// }
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["address"]) && isset($_POST["password"]) && isset($_FILES['image']['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $password = md5($_POST["password"]);
    $fileName = basename($_FILES["image"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    // Allow certain file formats 
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'webp');
    if (in_array($fileType, $allowTypes)) {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $query = "INSERT INTO crud (name,address,email,password,image) VALUES ('$name','$address','$email','$password','$imgContent')";

        if (mysqli_query($conn, $query)) {
            // session_start();
            // $_SESSION['QUERY_STRING'] = "Successfully Inserted";
            // return header("location:index.php");
            echo "Data Inserted Successfully";
        }
    } else {
        mysqli_errno($conn);
    };
}
