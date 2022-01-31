<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Product</title>
    <link href="css/jquery.bxslider.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <?php
    session_start();
    include("../header.php");
    require_once('component.php');
    ?>
    <br>
        <?php
        Detailproduct ('../pictures/cotton_shorts.jpg', 'shortes', 12, 1);
        // Detailproduct ('../pictures/chapeau.jpg', 'Hat', 18, 2);
    //     try{
    //         $pdo=new PDO("mysql:host=localhost;dbname=kids",'root','');
    //         $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //         $req=" select * from products ";
    //         $pdostat=$pdo->query($req);
    //         foreach($pdostat as $ligne){
    //           session_start();
    //                   if(isset($_SESSION["username"]))
    //                   {
    //                       $nom=$_SESSION["username"];
    //           echo"
    //           <center>
    //             <div class='card mb-3' style='max-width: 540px;'>
    //             <div class='row g-0'>
    //                 <div class='col-md-4'>
    //                 <img src=$prd_img class='img-fluid rounded-start' alt='Image' >
    //                 </div>
    //                 <div class='col-md-8'>
    //                 <div class='card-body'>
    //                 <h5 class='card-title'>$prd_title</h5>
    //                 <hr>   
    //                 <h4>$prd_price</h4> 
    //                 Size : <br>
    //                 <select name='op 'id='version' >Size
    //                 <option value='0-3mo.' selected>0-3mo.</option>
    //                     <option value='3-6 mo.'>3-6 mo.</option>
    //                     <option value='6-12 mo.'>6-12 mo.</option>
    //                     <option value=''>18 mo.</option>
    //                     <option value=''>2 yr.</option>
    //                     </select>
    //                     <p class='card-text'>These are Mebie's cotton shorts. They are made out of a cotton fabric, <br>
    //                     they have an elastic and a faux tie on the waist! <br>
    //                     Wash in cold water <br>
    //                     Fit True to Size<br>
    //                     95% Cotton 5% Spandex</p>
    //                     <button type='button' class='btn btn-danger'>Add to Cart <i class='fas fa-shopping-cart'></i></button>
    //                     <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
    //                 </div>
    //                 </div>
    //                 </div>
    //             </div>
    //         </div>
    //     </center>
    //     ";}
    // }
    // }
    // catch(Exception $e)
    // {
    //     echo"ERREUR : ".$e->getMessage();
    // }
        ?>
    <br>
    <?php
        include("../footer.php");
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