<html>
<?php require("Auteur.php");
?>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css_applis.css">
</head>   
<body>
        <center>
            <h1><font color="red"> Les Auteurs</font></h1>
        </center>

<ul>          <!-- debut du menus-->

    <li><a href="page_livre.php">Page des livres </a></li>
    <li><a href="page_commentaire.php">Page des commentaires </a></li>
    <li style="float:right"><a class="active" href="page_daccueil.php">retour accueil</a></li>

</ul>            <!-- fin du menus -->
<?php

$auteur=new Auteur(1);
$auteur->AfficherAuteur();

$auteur1=new Auteur(2);
$auteur1->AfficherAuteur();



// ainsi de suite... 


?>

</body>
</html>