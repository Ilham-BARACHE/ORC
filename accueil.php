<?php 
session_start();
if ( $_SESSION['auth'] != true ) {
    header('location:authentification.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Page d'accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleof.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
   
    <!--js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

    
* {
  margin:0;
  padding:0;

}

#body{
  font-family:Arial , sans-serif;
  font-size:17px;
  line-height:1.6;
}

#showcase{
  background-image:url("DSC00441.jpg");
  height: 95vh; 
  background-size:cover;
  background-position:center;
  display:flex;
  flex-direction:column;
  justify-items:center;
  text-align:center;
  padding:0 20px;

}

#showcase h1{
  font-size:30px;
  color:Black;
}

#showcase .button{
font-size:20px;
padding:10px 20px;
margin-top:20px;
border:#926239 1px solid;
color:#926239;
border-radius:10px;
width:50%;

    position: relative;
    margin-left: auto;
    margin-right: auto;

}

#showcase .button:hover{
  color:#fff;
  


}
	</style>
</head>
<body>

<header id="showcase"  >
<h1 style="font-family: Roboto black;">BIENVENUE à KLUBB France!</h1>

<button class="button" ><a href="commercial.php">Commerciale</a></button>
<button class="button"><a href="control1.php">Controle</a></button>
<?php

include('database.php');
$select=$bdd->query('SELECT * FROM utilisateur where pseudo="'.$_SESSION['pseudo'].'" ');
$trouve=0;
while ($donnee=$select->fetch()) {
if($donnee['role']=="admin" ){

?>
<button class="button"><a href="contact.php">Contact</a></button>

    <button class="button" id="bouton_membre"  onfocus="document.getElementById('menu_membre').style.display = 'block';" ><a>Ajout</a>
 
        <ul id="menu_membre" style="display: none;">
            <li><a href="ajoututilisateur.php">Utilisateur</a></li>
            <li><a href="ajoutvehicule.php">Véhicule</a></li>
            <li><a href="ajoutnacelle">Nacelle</a></li>
            <li><a href="ajoutoption.php">Option</a></li>
            
        </ul></button>
        

<?php
}
}
?>

<button onblur="document.getElementById('menu_membre').style.display = 'none';" class="button"><a  href="LogOut.php"><span  class="glyphicon glyphicon-log-in "></span> Déconnexion</a></button>
</header>


</body>




</html>


