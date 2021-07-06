<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title> Authentification </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
body{

    /* background-color: rgba(2,55,135,0.4); */
    background-image:url("Usine.jpg");
   
    /* background-image:url("https://tse3.mm.bing.net/th?id=OIP.HPRQQEBEl0fAmfSu_PVaegAAAA&pid=Api&P=0&w=353&h=179"); */
  height: 95vh; 
  background-size:cover;
  background-position:center;
  display:flex;
  flex-direction:column;
  justify-items:center;
  text-align:center;
  padding:0 20px;
}
#form{
    position:absolute;
   top:50%;
   left:50%;
   width:500px; /* A toi de donner la bonne largeur */
   height:50px; /* A toi de donner la bonne hauteur */
   margin-left:-250px; /* -largeur/2 */
   margin-top:100px; /* -hauteur/2 */
   
}


</style>
<body class="auth">

	<div class="container col-xs-offset-4 col-xs-4">
		
		
		
		
		<form method="post" action="login.php" id="form" class="text-center">
			<fieldset class="scheduler-border">
				<legend> <h2 class="text-center " id="auth-titre" style="font-family: Roboto black;">Connectez Vous!</h2></legend>
			<div>
			<div class="form-group">
				<input type="text" class="form-control " name="pseudo" id="pseudo" placeholder="Pseudo" required>
			</div>
			<div class="form-group">
			<input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
			
			<br>
			</div>
			
			<button type="submit" id="authbtn"  class="btn btn-primary" name="Seconnecter" > Se connecter</button>
			</div>
			</fieldset>
		</form>
		</div>



</body>
</html>





