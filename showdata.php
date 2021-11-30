<?php
$conn = mysqli_connect("localhost", "root", "qwerty", "basic_crud") or die("Connection Failed");
$query = "SELECT id,name,address,email,image FROM crud";
$fetch = mysqli_query($conn, $query);
$output = "<table class='table'>
<thead>
    <tr>
        <th>Name</th>
        <th>E-mail</th>
        <th>Address</th>
        <th>image</th>
        <th>Action</th>
    </tr>
</thead>
";
if (mysqli_num_rows($fetch) > 0) {
    while ($rows = mysqli_fetch_assoc($fetch)) {
        $img = base64_encode($rows['image']);
        $output .= " <tr><td>{$rows['name']}</td><td>{$rows['email']}</td><td>{$rows['address']}</td><td><img src='data:image/jpg;charset=utf8;base64,$img' style='height:100px;width:100px' /></td><td><button  data-toggle='modal' data-id={$rows['id']} data-target='#modelId1' class='btn-sm btn-warning edit-btn'>Edit</button>|<button data-id={$rows['id']} class='btn-sm btn-danger del-btn'>Delete</button></td>";
    }
}
echo $output .= "</table>";
