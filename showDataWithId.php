<?php
$conn = mysqli_connect("localhost", "root", "qwerty", "basic_crud") or die("Connection Failed");
$id = $_POST['id'];
$query = "SELECT id,name,address,email,image FROM crud where id = '$id'";
$fetch = mysqli_query($conn, $query);

if (mysqli_num_rows($fetch) > 0) {
    while ($rows = mysqli_fetch_assoc($fetch)) {
        $img = base64_encode($rows['image']);
        echo "<form action='' id='data1' method='post' enctype='multipart/form-data'>
        <div class='form-group'>
            <label for='name'>Enter Your Name</label>
            <input required autocomplete='off' type='text' class='form-control' name='name' id='name' value='{$rows['name']}'>
            <input required hidden  type='text' class='form-control' name='id' id='id' value='{$rows['id']}'>
            <div class='b-block name-er text-danger'></div>
        </div><br>
        <div class='form-group'>
            <label for='address'>Enter Your Address</label>
            <input required autocomplete='off' type='text' class='form-control' name='address' id='address' value='{$rows['address']}' >
            <div class='b-block address-er text-danger'></div>
        </div><br>
        <div class='form-group'>
            <label for='email'>Enter Your Email</label>
            <input required autocomplete='off' type='email' class='form-control' name='email' id='email' value='{$rows['email']}'>
            <small id='emailHelpId' class='form-text text-muted'>Your Email is Secure</small>
            <div class='b-block email-er text-danger'></div>
        </div><br>
        <div class='form-group mb-3'>
        <img src='data:image/jpg;charset=utf8;base64,$img' style='height:100px;width:100px' />
            <label class'd-block' for='image'>Enter Your Image</label>
            <input type='file' class='form-control' name='image' id='image' >
            <div class='b-block password-er text-danger'></div>
        </div>
        <button type='submit' class='btn btn-success submit1'>Submit</button>
        </form>
        ";
    }
}
