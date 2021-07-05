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
  background-image:url("https://tse3.mm.bing.net/th?id=OIP.HPRQQEBEl0fAmfSu_PVaegAAAA&pid=Api&P=0&w=353&h=179");
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

}

#showcase .button:hover{
  color:#fff;
  background:#926239;


}
	</style>
</head>
<body>

<header id="showcase">
<h1>BIENVENUE à KLUBB France!</h1>

<button class="button" ><a href="commercial1.php">Commerciale</a></button>
<button class="button"><a href="control1.php">Controle</a></button>
<button class="button"><a href="contact.php">Contact</a></button>



</header>


</body>




</html>


