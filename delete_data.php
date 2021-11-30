<?php
$conn = mysqli_connect("localhost", "root", "qwerty", "basic_crud") or die("Connection Failed");
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "DELETE  from Crud where id='$id' ";
    if (mysqli_query($conn, $query)) {
        echo "Deleted Successfully";
    };
}
// } else {
//     $id = $_POST['id'];
//     $query = "SELECT * from Crud where id='$id' ";
//     $fetch = mysqli_query($conn, $query);
//     $data = mysqli_fetch_assoc($fetch);
// }
// if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["address"]) && isset($_POST["id"])) {
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $address = $_POST["address"];
//     $id = $_POST["id"];

//     $query = "UPDATE crud SET name= '$name',address = '$address',email = '$email' WHERE id = '$id'";
//     if (mysqli_query($conn, $query)) {
//         // session_start();
//         // $_SESSION['QUERY_STRING'] = "Successfully Inserted";
//         return header("location:index.php");
//     } else {
//         mysqli_errno($conn);
//     };
// }
