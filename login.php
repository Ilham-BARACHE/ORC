<?php 
session_start();
include('database.php');
$select=$bdd->query('SELECT * FROM utilisateur');
$trouve=0;
while ($donnee=$select->fetch()) {
	if (isset($_POST['pseudo']) && $_POST['pseudo']==$donnee['pseudo'] && isset($_POST['password']) && $_POST['password']==$donnee['password'] ) {
		$_SESSION['auth']=true;
		
		$_SESSION['pseudo']=$_POST['pseudo'];

		$trouve=1;
	}
}
$select->closeCursor();
  if ($trouve==0) {
  	 echo("l'utilisateur n'existe pas");
  	 ?><a href="authentification.php"><br>retour</a>
  	 <?php
  }else if($trouve==1){
header('location:accueil.php');}

?>