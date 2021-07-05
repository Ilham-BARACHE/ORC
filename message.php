<?php

$to = "ilhemmbarachee@gmail.com";
$subject = "Ajoutez une option";
$body = $_POST['message'];
// $headers = "From: ilhembarachee@gmail.com" . "\r\n";
mail($to, $subject, $body);
$message="utilisateur ajouté";
echo '<script type="text/javascript">'
. 'alert(" '.$message.'");'

. '</script>';
 
header('location:contact.php');


   

?>