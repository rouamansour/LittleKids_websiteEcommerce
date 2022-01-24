<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_panel.css">
 </head>
<body>
    <header>
        <div class="header-content">
            <div >
                <span class="text-white">Admin panel</span>
            </div>
            <div>
                <ul>
                    <li><a href="#"> <ion-icon name="cart-outline"></ion-icon> Order</a></li>
                    <li><a href="#"> <ion-icon name="checkmark-done-circle-outline"></ion-icon> Delivery</a></li>
                    <li><a href="#"> <ion-icon name="person-circle-outline"></ion-icon> User</a></li>
                    <li><a href="#"> <ion-icon name="log-out-outline"></ion-icon> Logout</a></li>
                </ul>
            </div>
        </div>
</header>
<div class="wrapper">
    <section class="sidebar">
        <ul class="nav-bar">
            <li><a href="#"> <ion-icon name="filter-circle-outline"></ion-icon> Dashboard</a></li>
            <li><a href="#"><ion-icon name="help-circle-outline"></ion-icon> Brand</a></li>
            <li><a href="#"> <ion-icon name="help-circle-outline"></ion-icon> Category</a></li>
            <li><a href="#"> <ion-icon name="help-circle-outline"></ion-icon> Slider Images</a></li>
            <li><a href="#"> <ion-icon name="help-circle-outline"></ion-icon> Delivery</a></li>
            <li><a href="#"> <ion-icon name="help-circle-outline"></ion-icon> Settings</a></li>
            <li><a href="#"> <ion-icon name="help-circle-outline"></ion-icon> Profile</a></li>
            <li><a href="#"> <ion-icon name="help-circle-outline"></ion-icon> logout</a></li>
        </ul>
    </section>
    <section class="working-panel">
        <div class="container-fluid">
            <h1>Welcome to dashboard</h1>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h4><ion-icon name="help-circle-outline"></ion-icon> All Category</h4>
                            <hr>
                            <p>
                                1234
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h4> <ion-icon name="help-circle-outline"></ion-icon>  All brands</h4>
                            <hr>
                            <p>
                                555
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h4> <ion-icon name="help-circle-outline"></ion-icon>  All users</h4>
                            <hr>
                            <p>
                                1000
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <h4> <ion-icon name="help-circle-outline"></ion-icon>  All orders</h4>
                            <hr>
                            <p>
                                700
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="all-order mt-5">
                <h2>New orders</h2>
                <hr>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="">
                    <th scope="col">Order N </th>
                        <th scope="col">Order Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>25/05/2020</td>
                        <td><span class="badge bg-danger">Unpaid</span></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>25/05/2020</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>25/05/2020</td>
                        <td><span class="badge bg-danger">Unpaid</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>