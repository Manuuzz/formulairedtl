<?php include ("formulaire.html");
      include ("User.php");?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
        try{$MaBase = new PDO('mysql:host=localhost;dbname=User', 'root', 'root');
            $req = "SELECT * FROM User";
            $reponses = $MaBase->query($req);
        }catch(Exception $e){
            echo'Problème : ', $e->getMessage(),"\n";
        }
        if(isset($_POST["seconnecter"])){
            if($User->getNom()==$_POST['login']&&$User->connexion()==$_POST['mdp']){
                ?>
                <h2>Vous etes connectés</h2>
                <?php
            }else{
                ?>
                <h2>Mauvais mdp ou login</h2>
                <?php
            }

        }
    ?>

















    
</body>
</html>