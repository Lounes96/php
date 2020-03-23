<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/formulaire.css">
    <link    href="https://fonts.googleapis.com/css?family=Anton|Archivo+Black|Cabin|Fredoka+One|Krona+One|Passion+One&display=swap"
    rel="stylesheet">

    <title>Formulaire de contact</title>

  </head>

  <body>

    <?php 
    
    $cinema=$_POST['cinema'];
    $ville=$_POST['ville'];
    $adresse=$_POST['adresse'];
    $mail=$_POST['mail'];
    $telephone=$_POST['telephone'];


    


    

    $servername = "db5000303638.hosting-data.io";
    $username = "dbu526569";
    $password = "*8y.4YNe";
    $dbname = "dbs296625";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO cinema (nom_cinema, ville_cinema, adresse_cinema, mail_cinema, telephone_cinema)
    VALUES ('$cinema', '$ville', '$adresse', '$mail', '$telephone')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Envoyé avec succès";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;


    include ('index.php');


    


   

  
    ?>




  
  </body>

 </html>