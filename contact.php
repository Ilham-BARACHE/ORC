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
    <style>
        .navbar-default .navbar-brand { /*changer la couleur du text accueil*/
            color: white;
        }

        .navbar-default .navbar-nav>li>a,
        .navbar-brand {/* changer la couleur des lien de la barre de navigation*/
            color: white;
        }

        .navbar-default {
            background-color:rgba(7, 56, 116, 0.7);/* changer la couleur de la barre de navigation*/
        }



    </style>
</head>
<style>
body{

    /* background-color: rgba(2,55,135,0.4); */
    background-image:url("DSC00441.jpg");
   
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
<nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                
            </button>
            <a class="navbar-brand" href="acceuil.php"><span class="glyphicon glyphicon-home"></span> Accueil</a>
           
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav navbar-left">
                

                <li style=" font-weight: bold;"> <a href="commercial.php">commercial</a>
                </li>

                <li style=" font-weight: bold;"> <a href="control.php">control</a>
                </li>          

                      
            </ul>
           
            <a style="float:right;" class="navbar-brand" href="LogOut.php"><span  class="glyphicon glyphicon-log-in "></span> Déconnexion</a>

        </div><!-- /.navbar-collapse -->
        
    </nav>


	<div class="container col-xs-offset-4 col-xs-4">
		
		
		
		
		<form method="post" action="message.php" id="form" class="text-center">
			<fieldset class="scheduler-border">
				<legend> <h2 class="text-center " id="auth-titre" style="font-family: Roboto black;">Ajouter une Option!</h2></legend>
			<div>
			<div class="form-group">
            <textarea id="message" name="message" rows="4" cols="50"></textarea>
			</div>
			
			<br>
		
			
			<button type="submit" id="authbtn"  class="btn btn-primary" name="Seconnecter" > Envoyer</button>
			</div>
			</fieldset>
		</form>
		</div>



</body>
</html>





