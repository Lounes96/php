<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/apercu.css">
    

    <title>cinema</title>
  </head>
 
<body>
 
<TABLE BORDER="1">
  <CAPTION> cinema </CAPTION>
  <tr>
 <th> cinema </th>
 <th> ville </th>
 <th> adresse </th>
 <th> mail </th>
 <th> tel </th>
  </tr>

  

  
  
 <?php


$servername = "db5000303638.hosting-data.io";
$username = "dbu526569";
$password = "*8y.4YNe";
$dbname = "dbs296625";


try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password , $pdo_options);
     
     
    // On recupere tout le contenu de la table news
$reponse = $bdd->query('SELECT nom_cinema, ville_cinema, adresse_cinema, mail_cinema, telephone_cinema  FROM cinema');
  
// On affiche le resultat
while ($donnees = $reponse->fetch())
{
    //On affiche les données dans le tableau
    echo "</tr>";
    echo "<td> $donnees[nom_cinema] </td>";
    echo "<td> $donnees[ville_cinema] </td>";
    echo "<td> $donnees[adresse_cinema] </td>";
    echo "<td> $donnees[mail_cinema] </td>";
    echo "<td> $donnees[telephone_cinema] </td>";
    echo "</tr>";
 
     
}
$reponse->closeCursor();
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}




?>

<button><a href="formulaire.php">Ajouter cinema</a></button>

<TABLE BORDER="1">
  <CAPTION> salle </CAPTION>
  <tr>
 <th> Numero salle </th>
 <th> capacité salle </th>
 <th> id cinema </th>
 
  </tr>

  

  
  
 <?php


$servername = "db5000303638.hosting-data.io";
$username = "dbu526569";
$password = "*8y.4YNe";
$dbname = "dbs296625";


try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password , $pdo_options);
     
     
    // On recupere tout le contenu de la table 
$reponse = $bdd->query('SELECT numero_salle, capacite_salle, id_cinema  FROM salle');
  
// On affiche le resultat
while ($donnees = $reponse->fetch())
{
    //On affiche les données dans le tableau
    echo "</tr>";
    echo "<td> $donnees[numero_salle] </td>";
    echo "<td> $donnees[capacite_salle] </td>";
    echo "<td> $donnees[id_cinema] </td>";
    
    echo "</tr>";
 
     
}
$reponse->closeCursor();
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


?>

<TABLE BORDER="1">
  <CAPTION> Equipement </CAPTION>
  <tr>
 <th> Nom de l'equipement </th>
 
 
  </tr>

  

  
  
 <?php


$servername = "db5000303638.hosting-data.io";
$username = "dbu526569";
$password = "*8y.4YNe";
$dbname = "dbs296625";


try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password , $pdo_options);
     
     
    // On recupere tout le contenu de la table 
$reponse = $bdd->query('SELECT nom_equipement  FROM equipement');
  
// On affiche le resultat
while ($donnees = $reponse->fetch())
{
    //On affiche les données dans le tableau
    echo "</tr>";
    echo "<td> $donnees[nom_equipement] </td>";
    
    
    echo "</tr>";
 
     
}
$reponse->closeCursor();
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


?>






   

</body>
</html>
