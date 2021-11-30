<?php
$conn = mysqli_connect("localhost", "root", "qwerty", "basic_crud") or die("Connection Failed");
$query = "SELECT id,name,address,email FROM crud";
$fetch = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        .modal-body1 {
            padding: 20px;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="insert_form.php">


                            <i class="fa fa-circle-thin"></i><span style="padding:5px"> Insert Form</span>

                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">

            <div class="col-4 offset-4">

                <h3 class="text-center text-primary"> Dashboard </h3 class="text-center text-primary">
            </div>

            <main>
                <!-----Edit Model----->
                <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit User Detail</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body1">

                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Model on Edit -->

                <!-- Button trigger modal -->

                <button class="btn-sm btn-primary" data-toggle="modal" data-target="#modelId" style="float:right;text-decoration:none;margin-right:25px ">Add user</button>
                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add User Detail</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" id="data" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name">Enter Your Name</label>
                                        <input required autocomplete="off" type="text" class="form-control" name="name" id="name" placeholder="Name Here">
                                        <div class="b-block name-er text-danger"></div>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="address">Enter Your Address</label>
                                        <input required autocomplete="off" type="text" class="form-control" name="address" id="address" placeholder="Address Here">
                                        <div class="b-block address-er text-danger"></div>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="email">Enter Your Email</label>
                                        <input required autocomplete="off" type="email" class="form-control" value="Enter Your Email " name="email" id="email" placeholder="Email Here">
                                        <small id="emailHelpId" class="form-text text-muted">Your Email is Secure</small>
                                        <div class="b-block email-er text-danger"></div>
                                    </div><br>
                                    <div class="form-group mb-3">
                                        <label for="image">Enter Your Image</label>
                                        <input required type="file" class="form-control" name="image" id="image" placeholder="image Here">
                                        <div class="b-block password-er text-danger"></div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password">Enter Your Password</label>
                                        <input required type="password" class="form-control" name="password" id="password" placeholder="Password Here" autocomplete="new-password">
                                        <div class="b-block password-er text-danger"></div>
                                    </div>
                                    <button type="submit" class="btn btn-primary submit">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="showdata">

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            //SHow Data Through Ajax
            function loadajax() {
                $.ajax({
                    type: "post",
                    url: "showdata.php",
                    success: function(response) {
                        $("table").html("");
                        console.log(response);
                        $(".showdata").append(response);
                    }
                });
            }
            loadajax();

            //Insert Data Through Ajax

            // $(".submit").click(function(e) {
            //     var name = $("#name").val();
            //     var email = $("#email").val();
            //     var address = $("#address").val();
            //     var password = $("#password").val();
            //     if (name.length < 4) {
            //         $(".name-er").show().html("Min Length 4 Characters ");
            //         e.preventDefault();
            //     } else if (address.length < 10) {
            //         $(".address-er").show().html("Min Length 10 Characters ");
            //         e.preventDefault();
            //     } else if (password.length < 8) {
            //         $(".password-er").show().html("Min Length 8 Characters ");
            //         e.preventDefault();
            //     } else {

            //     }
            // })

            $("form#data").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                console.log(formData);

                $.ajax({
                    url: "form_submit.php",
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        $("#data").trigger("reset");
                        $(".name-er").hide();
                        $(".address-er").hide();
                        $(".password-er").hide();
                        // alert(data)

                        loadajax();
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });

            // Show Data Thorugh Ajax on Edit Model
            $(document).on("click", ".edit-btn", function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                // alert(id);
                // $("table").html("");
                id = $(this).data('id');
                $(".modal-body1").html("");
                $.ajax({
                    type: "post",
                    url: "showDataWithId.php",
                    data: {
                        id: id
                    },

                    success: function(response) {
                        $(".modal-body1").append(response);
                        // loadajax();
                    }
                });
            })

            //Edit Data THrough Ajax
            $(document).on("click", ".submit1", function(e) {
                $("form#data1").submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    console.log(formData);

                    $.ajax({
                        url: "editPageId.php",
                        type: 'POST',
                        data: formData,
                        success: function(data) {
                            $("#data").trigger("reset");
                            $(".name-er").hide();
                            $(".address-er").hide();
                            $(".password-er").hide();
                            if (data == 0) {
                                alert("Wrong File Format");

                            } else {
                                $(".close").click();
                                $("table").html("");
                                loadajax();
                            }
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                })


            })


            //Delete Data THrough Ajax
            $(document).on("click", ".del-btn", function(e) {
                e.preventDefault();
                $("table").html("");
                id = $(this).data('id');
                $.ajax({
                    type: "post",
                    url: "delete_data.php",
                    data: {
                        id: id
                    },

                    success: function(response) {

                        loadajax();
                    }
                });
            })

        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    INSERT INTO emp_history(id,name,start_data,end_date)VALUES
    ('4','mohit','25-12-2005','02/15/2010')
</body>

</html>