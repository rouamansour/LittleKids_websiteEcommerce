<?php
session_start();
include("../Header.php");
?>

<?php
try{
    $id=$_GET['id'];
    $pdo=new PDO("mysql:host=localhost;dbname=adminpanel",'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdostat=$pdo->query("select * from register where id='".$id."'");
    $ligne=$pdostat->fetch(PDO::FETCH_ASSOC);
    $username=$ligne['username'];
    $email=$ligne['email'];
    $password=$ligne['password'];
}
catch(Exception $e)
{
    echo "ERREUR :".$e->getMessage();
}
?>


<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link rel="stylesheet" href="header.css" type="text/css"/>
        <link href="css/jquery.bxslider.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Edit Admin</title>
</head>
<body>
<br><br><br><br>
<center>
<form method="Get" action="Enregistrer_Livre.php">
<h1>Edit Admin</h1>
<br/>
<div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        <th>Id</th>
        <td><input type="number" name="id" value=<?php echo $id?> /></td>
        </tr>
        <tr>
        <th>username</th>
        <td><input type="text" name="titre" value=<?php echo $username?> /></td>
        </tr>
        <tr>
        <th>Email</th>
        <td><input type="text" name="description" value=<?php echo $email?> /></td>
        </tr>
        <tr>
        <th>password</th>
        <td><input type="number" name="prix" value=<?php echo $password?> /></td>
        </tr>
        </table>
    </div>
</div>
<br/>
<p>
    <input type="submit" name="" value="Enregistrer" class="btn btn-success">
    <input type="reset" class="btn btn-danger" value="Annuler"/>
</p>
</form>
</center>
<?php
include("../Footer.php");
?>
</body>
</html>
