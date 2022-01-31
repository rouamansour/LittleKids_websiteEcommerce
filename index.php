<?php
require_once('customers/createdb.php');
require_once('customers/component.php');
$database = new createdb("kids", "products");

if (isset($_POST['add'])){
    if(isset($_SESSION['cart'])){
        $item_array_id = array_column($_SESSION['cart'], "prd_id");
        if(in_array($_POST['prd_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location ='index.php'</script>";
        }else{
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );
            $_SESSION['cart'][$count] = $item_array;
        }
    }else{
        $item_array = array(
            'product_id' => $_POST['product_id']
        );
        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        //print_r($_SESSION['cart']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Kids shop</title>
    <link href="css/jquery.bxslider.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <?php
    session_start();
    include("Header.php");
    include("banner.php");
    ?>
    <div class="container">
        <div class="row text-center py-5">
        <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['prd_title'], $row['prd_price'], $row['prd_img'], $row['prd_id']);
                }
        ?>
        </div>
    </div>
    <?php
        include("footer.php");
    ?>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
</body>

</html>