
<?php
    //$message="";
    $id=$_GET['id'];
    $username=$_GET['username'];
    $email=$_GET['email'];
    $password=$_GET['password'];

    try{
        $pdo=new PDO("mysql:host=localhost;dbname=adminipanel",'root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $req=" INSERT INTO livre (`id`, `username`, `email`,`password`) VALUES (NULL, '$username', '$email', '$password')";
        $pdo->query($req);
        header('Location:Profile.php'); 
        }
        catch(Exception $e)
        {
            echo"ERREUR : ".$e->getMessage();
        }
?>
