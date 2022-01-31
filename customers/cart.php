<?php
session_start();
require_once('createdb.php');
require_once('component.php');

$db = new createdb("kids", "products");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["prd_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="css/jquery.bxslider.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body>
<!-- <h1>Welcome shopping cart</h1> -->
<?php
   require_once("../header.php");
?>
<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>
                <?php
                if(isset($_SESSION['cart']))
                {
                    $prd_id=array_column($_session['cart'],'prd_id');
                    $result=$db->getData();
                    while($row=mysqli_fetch_assoc($result)){
                        foreach($prd_id as $id){
                            if($row['id']==$id){
                                cartElement($row['prd_img'],$row['prd_title'],$row['prd_price']);
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">        
    </div>
</div>

</body>
</html>
<?php
   include("../footer.php");
?>
</html>