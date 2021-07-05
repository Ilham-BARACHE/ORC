<?php 

session_start();
if ( $_SESSION['auth'] != true ) {
    header('location:authentification.php');
    


}

try {
	
    
    


    include('database.php');
$noffre=$_POST['offre'];
$ma=$_POST['marque'];
$mo=$_POST['modele'];
$ch=$_POST['choix'];
if($_POST['choix']=="plateau"){
    $f=$_POST['formatplateau'];
}else if($_POST['choix']=="plateforme"){
    $f=$_POST['formatplateforme'];
}else{
    $f=$_POST['formattronquage'];
}

$pt=$_POST['ptac'];
$nbpl=$_POST['nbrplace'];                                    
$monacelle=$_POST['modelenacelle'];
$p=$_POST['paniernacelle'];
$prota=$_POST['panierrotatif'];
$st=$_POST['stabil'];
$nbst=$_POST['stabilisat'];
$plan=$_POST['plancher'];
if($_POST['plancher']=="Avec"){
        $chpl=$_POST['planch'];
    
    }else{
        $chpl=""; 
    }
$pa=$_POST['parois'];
if($_POST['parois']=="Avec"){
    $chpa=$_POST['par'];
}else{
$chpa="";
}
$etag=$_POST['etagere'];

if($_POST['etagere']=="Avec"){
    $nivetag=$_POST['niv'];
    $longetag=$_POST['long'];

    if($_POST['long']=="1000"){
        $nbb=$_POST['bacs1000'];
    }else{
        $nbb=$_POST['bacs1500'];
    
    }
}else{
   $nbb=0;
    $longetag=0;
    $nivetag=0;
}


$opt = implode(", ",$_POST['options']);

$req = $bdd->prepare('UPDATE registrecommercial SET  noffre=:nv,marque=:nvmarque,modele=:nvmodele,choix=:nvchoix,format=:nvformat,ptac=:nvptac,nbrplace=:nvnbrplace,modelnacelle=:nvmodelnacelle,panier=:nvpanier,panierrotatif=:nvpanierrotatif,stabilisateur=:nvstabilisateur,nbstabilisateur=:nvnbstabilisateur,plancher=:nvplancher,choixplancher=:nvchoixplancher,parois=:nvparois,choixparois=:nvchoixparois,etagere=:nvetagere,nivetagere=:nvnivetagere,longetagere=:nvlongetagere,nbbac=:nvnbbac WHERE num=(SELECT max(num) FROM (select * from registrecommercial )As num ) ');
		


	$req->execute(array( 
			'nv' => $noffre,
            'nvmarque' => $ma,
            'nvmodele' => $mo,
            'nvchoix' => $ch,
            'nvformat' => $f,
            'nvptac' => $pt,
            'nvnbrplace' => $nbpl,
            'nvmodelnacelle' => $monacelle,
            'nvpanier' => $p,
            'nvpanierrotatif' => $prota,
            'nvstabilisateur' => $st,
            'nvnbstabilisateur' => $nbst,
            'nvplancher' => $plan,
            'nvchoixplancher' => $chpl,
            'nvparois' => $pa,
            'nvchoixparois' => $chpa,
            'nvetagere' => $etag,
            'nvnivetagere' => $nivetag,
            'nvlongetagere' => $longetag,
            'nvnbbac' => $nbb,
           


            
			
			));			





   



} catch (Exception $e) {
	die('erreur'.$e->getmessage());
}

 ?>



<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    
	<link rel="stylesheet" type="text/css" href="styleof.css">
    <link rel="stylesheet" href="impression.css" type="text/css" media="print">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   
    <!--js-->
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
            background-color: rgba(7, 56, 116, 0.7);/* changer la couleur de la barre de navigation*/
        }


* {
  box-sizing: border-box;
}


thead th {
  text-align: center;
}

h1 {
  text-align: center;  
}
table {
   background-color: rgba(2,55,135,0.4)!important;
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
  float:left;

}

th { padding:0.5em; }
/* Mark input boxes that gets an error on validation: */

/* Hide all steps by default: */
button:hover {
  opacity: 0.8;
}
button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

    </style>

   <script language="javascript">
   function printdiv(printpage) 
   { 
    var headstr = "<html><head><style></style></head><body>";
    var footstr = "</body></html>";
    var newstr = document.all.item(printpage).innerHTML; 
    var oldstr = document.body.innerHTML; document.body.innerHTML = headstr+newstr+footstr; window.print(); 
    document.body.innerHTML = oldstr; 
    return false; 
  } 

</script>

   </head>





<body>
    
<nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                
            </button>
            <a class="navbar-brand" href="accueil.php"><span class="glyphicon glyphicon-home"></span> Accueil</a>
        </div>
        <a style="float:right;" class="navbar-brand" href="LogOut.php"><span  class="glyphicon glyphicon-log-in "></span> Déconnexion</a>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav navbar-left">
                

                <li style=" font-weight: bold;"> <a href="commercial.php">commercial</a>
                </li>

                <li style=" font-weight: bold;"> <a href="control.php">control</a>
                </li>          

                      
            </ul>
           


        </div><!-- /.navbar-collapse -->
    </nav>

  
    
<div class="container-fluid" >
    <button style="float:right" type="btnutton" id="impbtn" name="b_print" class="glyphicon glyphicon-print btn btn-light"  onClick="printdiv('div_print')"  > Imprimer</button>
   
    <br>
    <br>
    
    

    
   
   

    
        <div class="mydiv">
        


<meta charset="utf-8" />
<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=klubb;charset=utf8','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$vehicules = $bdd->query('SELECT * FROM vehicule');
$nacelles = $bdd->query('SELECT * FROM nacelle');
$option = $bdd->query('SELECT * FROM options');
$select=$bdd->query('SELECT mat FROM matricule');


if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   $vehicules = $bdd->query('SELECT * FROM vehicule LIKE "%'.$q.'%"');
   $nacelles = $bdd->query('SELECT * FROM nacelle LIKE "%'.$q.'%"');
   $option = $bdd->query('SELECT * FROM options LIKE "%'.$q.'%"'); 
   $select=$bdd->query('SELECT mat FROM matricule LIKE "%'.$q.'%"');
}

     
   

   ?>
  



 <div id="div_print"  >
 <div style="float:right;">
 <script type="text/javascript"> 
        d = new Date();
      document.write(d.toLocaleDateString()); 
    </script>

</div>

 <div>


<img src="logo.png" width ="300px">

    </div>
 <div class="retitre" >
        <h2 class="heading-title text-center">fiche commercial</h2>
        
    </div>
    
           
    
                        
                        
                       
                 
    



 <?php if($vehicules  && $nacelles && $option ->rowCount() > 0 ){?>
    
  <table class="table table-bordered" style="border: 3px solid black; background-color: rgba(2,55,135,0.4)!important;">
  
                <thead>
                    <th > Type de la nacelle
                    </th>
                    <th>  
                        <?php 
                         echo($_POST['modelenacelle'])
                         ?>
                     </th>

                    <th > vehicule</th>


                    <th>  
                        <?php 
                        if(!empty($_POST['formatplateforme']) && $_POST['choix']=="plateforme" ){
                            echo($_POST['marque'] . " " . $_POST['modele'] . " " . $_POST['formatplateforme'] );
                        } else if(!empty($_POST['formatplateau']) && $_POST['choix']=="plateau"){
                            echo($_POST['marque'] . " " . $_POST['modele'] . " " . $_POST['formatplateau'] );
                        }else {
                            echo($_POST['marque'] . " " . $_POST['modele'] . " " . $_POST['formattronquage'] );
                        }
                       
                         ?>
                     </th>
                    
                    <th >
                    </th>

                </thead>
                <thead>
<th> Drawing N° </th>

<th><?php 
                        try {
                            include('database.php');
                            $select=$bdd->query('SELECT mat FROM matricule');
                            while ($donnee=$select->fetch()) {
                                $mat=$donnee['mat'];

                            }
                            $select->closeCursor();
                            if($mat%10==$mat)
                                $mat1="00000".$mat;
                            else if($mat%100==$mat)
                                $mat1="0000".$mat;
                            else if($mat%1000==$mat)
                                $mat1="000".$mat;
                            else if($mat%10000==$mat)
                                $mat1="00".$mat;
                            else if($mat%100000==$mat)
                                $mat1="0".$mat;
                            else
                                $mat1="bou3lem";
                            } catch (Exception $e) {
                        die('erreur'.$e->getmessage());
                            }

 echo $mat1; 
 ?>
</th>
<th>Numéro d'offre </th>
<th>
<?php
echo $_POST['offre'];
?>

</th>
<th></th>
</thead>
</table>
<table class="table table-bordered" style="border: 3px solid black;">

               

                <thead style=" border-collapse: separate">
                <tr>
                    <th>

                    </th>
                    <th >
                    TOTAL Poids (Kg)
                    </th>
                    <th >
                    essieu avant poids (Kg)
                    </th>
                    <th >
                    essieu arriere Poids (Kg)
                    </th>
                    
                    
                    <th style=" border-left:5px;">
                    empattement (Kg)
                    </th>

                    </tr>
                </thead>

                <thead>
            
                <th >
                   PTAC
                </th>

                <th style="color:red;">
                <?php 

echo($_POST['ptac'])
 ?>
                </th>

                <th>
                   
                </th>
                <th>
                   
                </th>
                <th style="color:red;">
                   
 <?php 
 
 
            while ($donnee=$vehicules->fetch() ) {
               

                if($_POST['marque']==$donnee['marque']){
                    $poid_avant=$donnee['poids_max_avant'];
                    $poid_arriere=$donnee['poids_max_arriere'];
                    $position_colonne=$donnee['position_colonne'];
                    $poidfc=$donnee['poid_fc'];
                    $poid_cadre_toit=$donnee['poid_cadre_toit'];
                    $poid_ancrage=$donnee['poid_ancrage'];
                    $poid_suspension=$donnee['poid_suspension'];
                    $poid_pto=$donnee['poid_pto'];
                    $position_tronquageL2H2=$donnee['position_tronquage_L2H2'];
                    $position_tronquageL3H2=$donnee['position_tronquage_L3H2'];
                    $ytronque=$donnee['Ytronque'];
                    $yplateforme=$donnee['Yfourgon'];
                    $yplateau=$donnee['Yplateau'];
                    
                    
                    
                    
                        

                if ($_POST['formatplateau']=="L2" || $_POST['formatplateforme']=="L2H2" ||$_POST['formattronquage']=="L2H2"  ){
                    $empattement=$donnee['FL2'];
                    echo($empattement);
                    
                   
                    

                }else if ($_POST['formatplateforme']=="L1H1" || $_POST['formatplateforme']=="L1H2" ){
                    $empattement=$donnee['FL1'];
                    echo($empattement);
                   
                  
                }else if ($_POST['formatplateau']=="L3" || $_POST['formatplateforme']=="L3H2"|| $_POST['formattronquage']=="L3H2" ){
                    $empattement=$donnee['FL3'];
                    echo($empattement);
                  
                }



                if($_POST['formatplateforme']=="L1H1" ){
                    $poid_vide_avant=$donnee['poid_vide_avantL1H1'];
                    $poid_vide_arriere=$donnee['poid_vide_arriereL1H1'];
                    $poid_vide_total=$poid_vide_avant+$poid_vide_arriere;
                }
                if($_POST['formatplateforme']=="L1H2"){
                    $poid_vide_avant=$donnee['poid_vide_avantL1H2'];
                    $poid_vide_arriere=$donnee['poid_vide_arriereL1H2'];
                    $poid_vide_total=$poid_vide_avant+$poid_vide_arriere;
                }
                if($_POST['formatplateau']=="L2"){
                    $poid_vide_avant=$donnee['poid_vide_avantL2'];
                    $poid_vide_arriere=$donnee['poid_vide_arriereL2'];
                    $poid_vide_total=$poid_vide_avant+$poid_vide_arriere;
                }
                if($_POST['formatplateforme'] =="L2H2" || $_POST['formattronquage'] =="L2H2"){
                    $poid_vide_avant=$donnee['poid_vide_avantL2H2'];
                    $poid_vide_arriere=$donnee['poid_vide_arriereL2H2'];
                    $poid_vide_total=$poid_vide_avant+$poid_vide_arriere;
                }
                if($_POST['formatplateau']=="L3"){
                    $poid_vide_avant=$donnee['poid_vide_avantL3'];
                    $poid_vide_arriere=$donnee['poid_vide_arriereL3'];
                    $poid_vide_total=$poid_vide_avant+$poid_vide_arriere;
                }
                if($_POST['formatplateforme']=="L3H2" || $_POST['formattronquage'] =="L3H2"){
                    $poid_vide_avant=$donnee['poid_vide_avantL3H2'];
                    $poid_vide_arriere=$donnee['poid_vide_arriereL3H2'];
                    $poid_vide_total=$poid_vide_avant+$poid_vide_arriere;
                }
                if($_POST['choix']=="plateforme"){
                    $poid_choix=$donnee['poid_plateforme'];
                    $pos_divers=$yplateforme;
                    
                }else if($_POST['choix']=="tronquage"  )
                    {
                    $poid_choix=$donnee['poid_tronquage'];
                    $pos_divers=$ytronque;
                    
                }
                
                else if($_POST['choix']=="plateau" && $_POST['formatplateau']=="L3"){
                    $pos_divers=$yplateau;
                    $poid_choix=$donnee['poid_fcL3'];
                }else if ($_POST['choix']=="plateau" && $_POST['formatplateau']=="L2"){
                    $poid_choix=$donnee['poid_fcL2'];
                    $pos_divers=$yplateau;
                }

                
                
                if($_POST['plancher']=="Avec" ){

                if($_POST['planch']=="Bois" ){

                    if ($_POST['formatplateau']=="L2" || $_POST['formatplateforme']=="L2H2" || $_POST['formattronquage']=="L2H2"  ){
                        $poid_plancher=$donnee['plancher_bois_L2'];
                        
                        
                       
                        
                
                    }else if ($_POST['formatplateforme']=="L1H1" || $_POST['formatplateforme']=="L1H2" ){
                        $poid_plancher=$donnee['plancher_bois_L1'];
                        
                       
                      
                    }else if ($_POST['formatplateau']=="L3" || $_POST['formattronquage']=="L3H2" || $_POST['formatplateforme']=="L3H2" ){
                        $poid_plancher=$donnee['plancher_bois_L3'];
                       
                      
                    }
                
                }else{
                    if ($_POST['formatplateau']=="L2" || $_POST['formatplateforme']=="L2H2" || $_POST['formattronquage']=="L2H2" ){
                        $poid_plancher=$donnee['plancher_pvc_L2'];
                      
                        
                       
                        
                
                    }else if ($_POST['formatplateforme']=="L1H1" || $_POST['formatplateforme']=="L1H2" ){
                        $poid_plancher=$donnee['plancher_pvc_L1'];
                       
                       
                      
                    }else if ($_POST['formatplateau']=="L3" || $_POST['formatplateforme']=="L3H2" || $_POST['formattronquage']=="L3H2" ){
                        $poid_plancher=$donnee['plancher_pvc_L3'];
                       
                      
                    }
                
                }
            }
            if($_POST['parois']=="Avec"){
                

                if($_POST['par']=="Bois" ){

                    if ($_POST['formatplateau']=="L2" || $_POST['formatplateforme']=="L2H2" || $_POST['formattronquage']=="L2H2" ){
                        $poid_parois=$donnee['parois_bois_L2'];
                        
                        
                       
                        
                
                    }else if ($_POST['formatplateforme']=="L1H1" || $_POST['formatplateforme']=="L1H2" ){
                        $poid_parois=$donnee['parois_bois_L1'];
                        
                       
                      
                    }else if ($_POST['formatplateau']=="L3" || $_POST['formattronquage']=="L3H2" || $_POST['formatplateforme']=="L3H2" ){
                        $poid_parois=$donnee['parois_bois_L3'];
                       
                      
                    }
                
                }else{
                    if ($_POST['formatplateau']=="L2" || $_POST['formattronquage']=="L2H2" || $_POST['formatplateforme']=="L2H2"  ){
                        $poid_parois=$donnee['parois_pvc_L2'];
                      
                        
                       
                        
                
                    }else if ($_POST['formatplateforme']=="L1H1" || $_POST['formatplateforme']=="L1H2" ){
                        $poid_parois=$donnee['parois_pvc_L1'];
                       
                       
                      
                    }else if ($_POST['formatplateau']=="L3" || $_POST['formattronquage']=="L3H2" || $_POST['formatplateforme']=="L3H2" ){
                        $poid_parois=$donnee['parois_pvc_L3'];
                       
                      
                    }
                
                }

            }











               

            }
            

        

    


            }?> 
                </th>
</thead>



<thead>
                    
                    <th >
                    Charges limite par essieux
                    </th>
                    <th>
                    
                    </th>
                    <th style="color:red;">
                    <?php 

echo($poid_avant);
 ?>
                    </th>
                    <th style="color:red;">
                    <?php 

echo($poid_arriere);
 ?>
                    </th>

                    <th >
Distance depuis l'essieu avant
                    </th>

                    
                </thead>



                <thead >
                    
                    <th >
                   Poids à vide
                    </th>
                    <th>
                    <?php 

echo($poid_vide_total);
 ?>
                    </th>
                    <th style="color:red;">
                    <?php 

echo($poid_vide_avant);
 ?>
                    </th>
                    <th style="color:red;">
                    <?php 

echo($poid_vide_arriere);
 ?>
                    </th>
                    
<th>
</th>
                    
                </thead>

                <thead>
                    
                    <th >
                   Charge utile
                    </th>
                    <th>
                    <?php 

echo($_POST['ptac']-$poid_vide_total);
 ?>
                    </th>
                    <th >
                    <?php 

echo($poid_avant-$poid_vide_avant);
 ?>
                    </th>  
                    <th >
                    <?php 

echo($poid_arriere-$poid_vide_arriere);
 ?>
                    </th>
                    <th>
                    </th>

                    
                </thead>



                <thead>
                
                <th >
            PTO(électropompe)
              </th>
              <th>
               <?php 
               
               
               

echo($poid_pto);
?>
                </th>
                
                <th> 
                <?php 



$position_pto=$position_colonne+100;
$pto_avant=$poid_pto*(1-($position_pto/$empattement));
echo(round($pto_avant));

?>
                </th>            
                <th >
                <?php 
                $pto_arriere=$poid_pto-$pto_avant;
                echo(round($pto_arriere));

?>
                </th>
                <th >
                <?php 

echo($position_pto);
?>
                </th>
               

                

                
            </thead>



</table>
<table class="table table-bordered" style="border: 3px solid black;">
                <thead>
                
                    <th >
                   Nacelle panier
                   <?php 
                   
                   
                   

echo($_POST['paniernacelle']);
 ?>
                    </th>
                    
                    <th> 
                    <?php 
while ($donn=$nacelles->fetch()) {
    if($_POST['modelenacelle']==$donn['modele']){
       $poidnacelle= $donn['poid_nacelle'];
       $poid_p1=$donn['poid_p1'];
       $poid_p2=$donn['poid_p2'];
       $poid_stabilisateur2=$donn['poid_stabilisateur2'];
       $poid_stabilisateur4=$donn['poid_stabilisateur4'];
       if( $_POST['stabil']=="OUI"){
       if($_POST['paniernacelle']=="2P"){
         
        if( $_POST['stabilisat']=="02"){
            if($_POST['panierrotatif']=="OUI"){
                $poid_nacelle=$poidnacelle+$poid_stabilisateur2+$poid_p2+19;
            }else{
                $poid_nacelle=$poidnacelle+$poid_stabilisateur2+$poid_p2;
            }
       }else  if($_POST['panierrotatif']=="OUI" ){
        $poid_nacelle=$poidnacelle+$poid_stabilisateur4+$poid_p2+19;
    }else{
        $poid_nacelle=$poidnacelle+$poid_stabilisateur4+$poid_p2;
    }
            
      
    }else if($_POST['stabilisat']=="02" ){
       
            $poid_nacelle=$poidnacelle+$poid_stabilisateur2+$poid_p1;
        }
   else  {
    $poid_nacelle=$poidnacelle+$poid_stabilisateur4+$poid_p1;
}
} else if($_POST['paniernacelle']=="1P"){
    $poid_nacelle=$poidnacelle+$poid_p1;

}

    


    echo($poid_nacelle);
    }
}

 ?>
                    </th>            
                    <th >
                    <?php 
                $pc=$position_colonne+530;    
$nacellepanieravant=$poid_nacelle*(1-($pc/$empattement));
echo(round($nacellepanieravant));

 ?>
                    </th>
                    <th >
                            <?php 

$poid_n=$poid_nacelle-$nacellepanieravant;

echo(round($poid_n));
 ?>
                    </th>
                    <th >
                    <?php 

echo($pc);
 ?>
                    </th>

                    

                    
                </thead>



                <thead>
                    
                                
               
                 
                
                    <?php 
 if($_POST['choix']=="plateau"){
    
}else {
    $fc_avant=$poidfc*(1-($position_colonne/$empattement));
    $poidfcc=$poidfc-$fc_avant;
    echo('<tr>
             
<th >    Faux chassis       </th>           
<th>'   .round($poidfc). '</th>
<th>'   .round($fc_avant). '</th>
<th>'   .round($poidfcc). '</th>
<th>'   .round($position_colonne). '</th>


</tr>' );
}
    


 ?>
                
            
                 
                    

                    
                </thead>




                <thead>
                    
                  
                    <?php 

if($_POST['choix']=="plateau"){
    
}else {
    $cadre_toit_avant=$poid_cadre_toit*(1-($position_colonne/$empattement));
    $cardre_toit_apres=$poid_cadre_toit-$cadre_toit_avant;
    echo('<tr>
             
            
<th >Cadre de toit</th>
<th>'   .round($poid_cadre_toit). '</th>
<th>'   .round($cadre_toit_avant). '</th>
<th>'   .round($cardre_toit_apres). '</th>
<th>'   .round($position_colonne). '</th>
</tr>' );
}
 ?>
 
                    
     
               
                    

                    
                </thead>


                <thead>
                    
                    <th >
                  Support ancrage
                    </th>
                    <th>
                    <?php 

echo($poid_ancrage);
 ?>
                    </th>
                    <th >
                    <?php 
$pca=$position_colonne+3140;
$poid_ancrage_avant=$poid_ancrage*(1-($pca/$empattement));
echo(round($poid_ancrage_avant));
 ?>
                    </th>
                    <th >
                    <?php 
$poid_ancrage_apres=$poid_ancrage-$poid_ancrage_avant;
echo(round($poid_ancrage_apres));
 ?>
                    </th>

                    <th >
                    <?php 

echo($pca);
 ?>
                    </th>
                    

                    
                </thead>


                <thead>
                    
                    <th > 
                    <?php 

echo($_POST['choix']);
 ?>
                    </th>
                    <th>
                    <?php 

echo($poid_choix);
 ?>
                    </th>

                    <th>
                    <?php 
                     if($_POST['choix']=="tronquage"  && $_POST['formattronquage']=="L3H2"){
                        
                        $choix_avant=$position_colonne+$position_tronquageL3H2;
$poid_choix_avant=$poid_choix*(1-($choix_avant/$empattement));
echo(round($poid_choix_avant));
                    }else if($_POST['choix']=="tronquage" && $_POST['formattronquage']=="L2H2"){
                        
                        $choix_avant=$position_colonne+$position_tronquageL2H2;
$poid_choix_avant=$poid_choix*(1-($choix_avant/$empattement));
echo(round($poid_choix_avant));
                    }else if($_POST['choix']=="plateforme"){
                        $choix_avant=$position_colonne+2850;
$poid_choix_avant=$poid_choix*(1-($choix_avant/$empattement));
echo(round($poid_choix_avant));
                    }

 ?>
                    </th>

                    <th>
                    <?php 
$poid_choix_arriere=$poid_choix-$poid_choix_avant;
echo(round($poid_choix_arriere));
 ?>
                    </th>

                    <th>
                    <?php 

echo($choix_avant);
 ?>
                    </th>
                                  </thead>





            </table>

            
          


<table class="table table-bordered" style="border:3px solid black;">
<thead>
                
                <th >
            Signalisation
              </th>
              <th>
               <?php 
               
               
               
$poid_signalisation=14;
echo($poid_signalisation);
?>
                </th>
                
                <th> 
                <?php 




$signalisation_avant=$poid_signalisation*(1-($empattement/$empattement));
echo(round($signalisation_avant));

?>
                </th>            
                <th >
                <?php 
               $signalisation_arriere= $poid_signalisation-$signalisation_avant;
                echo(round($signalisation_arriere));

?>
                </th>
                <th >
                <?php 

echo($empattement);
?>
                </th>
               

                

                
            </thead>
<thead>
                
                <th >
              Suspension AR
              </th>
              <th>
               <?php 
               
               
               

echo($poid_suspension);
?>
                </th>
                
                <th> 
                <?php 




$suspension_avant=$poid_suspension*(1-($empattement/$empattement));
echo(round($suspension_avant));

?>
                </th>            
                <th >
                <?php 
               $poid_suspension_arriere= $poid_suspension-$suspension_avant;
                echo(round($poid_suspension_arriere));

?>
                </th>
                <th >
                <?php 

echo($empattement);
?>
                </th>
               

                

                
            </thead>
            <thead style="bgcolor:blue;">
                
               
              
               <?php 
               
               
               while ($don=$option->fetch() ) {
                
                
                
                if(isset($_POST['options']) && !empty($_POST['options'])){
                    $option_Array = $_POST['options'];
                    
                    
                        foreach($option_Array as $options){
                        //affichage des valeurs sélectionnées
                        if($options==$don['nom']){
                            $poid_option=$don['poid'];
                           
                            $option_avant=$poid_option*(1-($pos_divers/$empattement));
                            $option_arriere=$poid_option-$option_avant;
                        echo('<tr>
                        <th >'   .$options. '</th>
                        <th>'   
                       
                            .round($poid_option).


                         '</th>
                       
                         <th>'   .round($option_avant). '</th>
                         <th>'  
                         .round($option_arriere).
                          '</th>
                         <th>'   .$pos_divers. '</th>

                        </tr>' );
                    }
                }
            }
           
                   }
                
            
            ?>


               
                
               
               

                

                
            </thead>


<thead>



<?php
if($_POST['plancher']=="Avec" ){
    $plancher_avant=$poid_plancher*(1-($pos_divers/$empattement));
    $plancher_arriere=$poid_plancher-$plancher_avant;
if($_POST['planch']=="Bois"){
    echo('<tr>
             
            
    <th >Plancher Bois</th>
    <th>'   .round($poid_plancher). '</th>
    <th>'   .round($plancher_avant). '</th>
    <th>'   .round($plancher_arriere). '</th>
    <th>'   .round($pos_divers). '</th>
    </tr>' );

}else {
    echo('<tr>
             
            
    <th >Plancher PVC</th>
    <th>'   .round($poid_plancher). '</th>
    <th>'   .round($plancher_avant). '</th>
    <th>'   .round($plancher_arriere). '</th>
    <th>'   .round($pos_divers). '</th>
    
    </tr>' );
}

}

?>








</thead>




<thead>


<?php

if($_POST['parois']=="Avec" ){
    $parois_avant=$poid_parois*(1-($pos_divers/$empattement));
    $parois_arriere=$poid_parois-$parois_avant;
if($_POST['par']=="Bois"){
    echo('<tr>
             
            
    <th >Parois Bois</th>
    <th>'   .round($poid_parois). '</th>
    <th>'   .round($parois_avant). '</th>
    <th>'   .round($parois_arriere). '</th>
    <th>'   .round($pos_divers). '</th>
    </tr>' );

}else {
    echo('<tr>
             
            
    <th >Parois PVC</th>
    <th>'   .round($poid_parois). '</th>
    <th>'   .round($parois_avant). '</th>
    <th>'   .round($parois_arriere). '</th>
    <th>'   .round($pos_divers). '</th>
    
    </tr>' );
}

}










?>

          



</thead>










<thead>



<?php



if($_POST['parois']=="Avec" ){
    
if($_POST['long']=="1000"){
    $poid_etagere=2.5+($_POST['niv']*3.5);
    $etagere_avant=$poid_etagere*(1-($pos_divers/$empattement));
    $etagere_arriere=$poid_etagere-$etagere_avant;
    echo('<tr>
             
            
    <th >Etagere</th>
    <th>'   .round($poid_etagere). '</th>
    <th>'   .round($etagere_avant). '</th>
    <th>'   .round($etagere_arriere). '</th>
    <th>'   .round($pos_divers). '</th>
    </tr>' );

}else {
    $poid_etagere=3+($_POST['niv']*3.5);
    $etagere_avant=$poid_etagere*(1-($pos_divers/$empattement));
    $etagere_arriere=$poid_etagere-$etagere_avant;
    echo('<tr>
             
            
    <th >Etagere</th>
    <th>'   .round($poid_etagere). '</th>
    <th>'   .round($etagere_avant). '</th>
    <th>'   .round($etagere_arriere). '</th>
    <th>'   .round($pos_divers). '</th>
    
    </tr>' );
}

}







?>

            
        


</thead>





<thead>

<?php



if($_POST['parois']=="Avec" ){
    
if($_POST['long']=="1000"){
    $poid_bacs=$_POST['bacs1000']*0.4;
    $bac_avant=$poid_bacs*(1-($pos_divers/$empattement));
    $bac_arriere=$poid_bacs-$bac_avant;
    echo('<tr>
             
            
    <th>Bacs</th>
    <th>'   .round($poid_bacs). '</th>
    <th>'   .round($bac_avant). '</th>
    <th>'   .round($bac_arriere). '</th>
    <th>'   .round($pos_divers). '</th>
    </tr>' );

}else {
    $poid_bacs=$_POST['bacs1500']*0.4;
    $bac_avant=$poid_bacs*(1-($pos_divers/$empattement));
    $bac_arriere=$poid_bacs-$bac_avant;
    echo('<tr>
             
            
    <th >Bacs</th>
    <th>'   .round($poid_bacs). '</th>
    <th>'   .round($bac_avant). '</th>
    <th>'   .round($bac_arriere). '</th>
    <th>'   .round($pos_divers). '</th>
    
    </tr>' );
}

}



?>
      
         






</thead>









































            
            <thead>
                
                <th >
            Divers
              </th>
              <th>
               <?php 
               
               
               

echo(5);
?>
                </th>
                
                <th> 
                <?php 




$divers_avant=5*(1-($pos_divers/$empattement));
echo(round($divers_avant));

?>
                </th>            
                <th >
                <?php 
                $divers_arriere=5-$divers_avant;
                echo(round($divers_arriere));

?>
                </th>
                <th >
                <?php 

echo($pos_divers);
?>
                </th>
               
                
            </thead>




            <thead>
                
                <th >
            OIL ETC
              </th>
              <th>
               <?php 
               
               
               

echo(25);
?>
                </th>
                
                <th> 
                <?php 




$oil_avant=25*(1-($position_colonne/$empattement));
echo(round($oil_avant));

?>
                </th>            
                <th >
                <?php 
                $oil_arriere=25-$oil_avant;
                echo(round($oil_arriere));

?>
                </th>
                <th >
                <?php 

echo($position_colonne);
?>
                </th>
               

                

                
            </thead>






















</table>


            <table class="table table-bordered" style="border:3px solid black;">

<thead>

            <th >
         Total
              </th>
              <th>
              <?php
              if($_POST['parois']=="avec" ){
               if($_POST['plancher']=="avec" ){
              if(!empty($_POST['options']) ){

                if( $_POST['choix'] != "plateau"){

                    $total_avant=$poid_vide_avant+$nacellepanieravant+$cadre_toit_avant+$fc_avant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$pto_avant+$option_avant+$plancher_avant+$parois_avant+$divers_avant+$oil_avant;
                    $total_arriere=$poid_vide_arriere+$poid_n+$cardre_toit_apres+$poidfcc+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$pto_arriere+$option_arriere+$plancher_arriere+$parois_arriere+$divers_arriere+$oil_arriere;
                    $total=$total_arriere+$total_avant;
                     echo(round($total));
                }else {
                $total_avant=$poid_vide_avant+$nacellepanieravant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$pto_avant+$option_avant+$divers_avant+$oil_avant;
                $total_arriere=$poid_vide_arriere+$poid_n+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$pto_arriere+$option_arriere+$divers_arriere+$oil_arriere;
                $total=$total_arriere+$total_avant;
                 echo(round($total));
              }}
              else if($_POST['choix'] != "plateau"){
                $total_avant=$poid_vide_avant+$nacellepanieravant+$cadre_toit_avant+$fc_avant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$pto_avant+$plancher_avant+$parois_avant+$divers_avant+$oil_avant;
                $total_arriere=$poid_vide_arriere+$poid_n+$cardre_toit_apres+$poidfcc+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$pto_arriere+$plancher_arriere+$parois_arriere+$divers_arriere+$oil_arriere;
                $total=$total_arriere+$total_avant;
                 echo(round($total));
              }else {
                $total_avant=$poid_vide_avant+$nacellepanieravant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$pto_avant+$plancher_avant+$parois_avant+$divers_avant+$oil_avant;
                $total_arriere=$poid_vide_arriere+$poid_n+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$pto_arriere+$plancher_arriere+$parois_arriere+$divers_arriere+$oil_arriere;
                $total=$total_arriere+$total_avant;
                 echo(round($total));
              } }
              else if(!empty($_POST['options']) ){

                    if( $_POST['choix'] != "plateau"){
    
                        $total_avant=$poid_vide_avant+$nacellepanieravant+$cadre_toit_avant+$fc_avant+$poid_ancrage_avant+$poid_choix_avant+$signalisation_avant+$suspension_avant+$pto_avant+$option_avant+$parois_avant+$divers_avant+$oil_avant;
                        $total_arriere=$poid_vide_arriere+$poid_n+$cardre_toit_apres+$poidfcc+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$signalisation_arriere+$pto_arriere+$option_arriere+$parois_arriere+$divers_arriere+$oil_arriere;
                        $total=$total_arriere+$total_avant;
                         echo(round($total));
                    }else {
                    $total_avant=$poid_vide_avant+$nacellepanieravant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$signalisation_avant+$pto_avant+$option_avant+$parois_avant+$divers_avant+$oil_avant;
                    $total_arriere=$poid_vide_arriere+$poid_n+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$signalisation_arriere+$pto_arriere+$option_arriere+$parois_arriere+$divers_arriere+$oil_arriere;
                    $total=$total_arriere+$total_avant;
                     echo(round($total));
                  }}
                  else if($_POST['choix'] != "plateau"){
                    $total_avant=$poid_vide_avant+$nacellepanieravant+$cadre_toit_avant+$fc_avant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avan+$signalisation_avant+$pto_avant+$parois_avant+$divers_avant+$oil_avant;
                    $total_arriere=$poid_vide_arriere+$poid_n+$cardre_toit_apres+$poidfcc+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$signalisation_arriere+$pto_arriere+$parois_arriere+$divers_arriere+$oil_arriere;
                    $total=$total_arriere+$total_avant;
                     echo(round($total));
                  }else {
                    $total_avant=$poid_vide_avant+$nacellepanieravant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$signalisation_avant+$pto_avant+$parois_avant+$divers_avant+$oil_avant;
                    $total_arriere=$poid_vide_arriere+$poid_n+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$pto_arriere+$signalisation_arriere+$parois_arriere+$divers_arriere+$oil_arriere;
                    $total=$total_arriere+$total_avant;
                     echo(round($total));
                  }

                }
                else  if($_POST['plancher']=="avec" ){
              if(!empty($_POST['options']) ){

                if( $_POST['choix'] != "plateau"){

                    $total_avant=$poid_vide_avant+$nacellepanieravant+$cadre_toit_avant+$fc_avant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$signalisation_avant+$pto_avant+$option_avant+$plancher_avant+$divers_avant+$oil_avant;
                    $total_arriere=$poid_vide_arriere+$poid_n+$cardre_toit_apres+$poidfcc+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$signalisation_arriere+$pto_arriere+$option_arriere+$plancher_arriere+$divers_arriere+$oil_arriere;
                    $total=$total_arriere+$total_avant;
                     echo(round($total));
                }else {
                $total_avant=$poid_vide_avant+$nacellepanieravant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$signalisation_avant+$pto_avant+$option_avant+$plancher_avant+$divers_avant+$oil_avant;
                $total_arriere=$poid_vide_arriere+$poid_n+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$signalisation_arriere+$pto_arriere+$option_arriere+$divers_arriere+$plancher_arriere+$oil_arriere;
                $total=$total_arriere+$total_avant;
                 echo(round($total));
              }}
              else if($_POST['choix'] != "plateau"){
                $total_avant=$poid_vide_avant+$nacellepanieravant+$cadre_toit_avant+$fc_avant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$signalisation_avant+$pto_avant+$plancher_avant+$divers_avant+$oil_avant;
                $total_arriere=$poid_vide_arriere+$poid_n+$cardre_toit_apres+$poidfcc+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$signalisation_arriere+$pto_arriere+$plancher_arriere+$divers_arriere+$oil_arriere;
                $total=$total_arriere+$total_avant;
                 echo(round($total));
              }else {
                $total_avant=$poid_vide_avant+$nacellepanieravant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$signalisation_avant+$pto_avant+$plancher_avant+$divers_avant+$oil_avant;
                $total_arriere=$poid_vide_arriere+$poid_n+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$signalisation_arriere+$pto_arriere+$plancher_arriere+$divers_arriere+$oil_arriere;
                $total=$total_arriere+$total_avant;
                 echo(round($total));
              } }
              else if(!empty($_POST['options']) ){

                    if( $_POST['choix'] != "plateau"){
    
                        $total_avant=$poid_vide_avant+$nacellepanieravant+$cadre_toit_avant+$fc_avant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$signalisation_avant+$pto_avant+$option_avant+$divers_avant+$oil_avant;
                        $total_arriere=$poid_vide_arriere+$poid_n+$cardre_toit_apres+$poidfcc+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$signalisation_arriere+$pto_arriere+$option_arriere+$divers_arriere+$oil_arriere;
                        $total=$total_arriere+$total_avant;
                         echo(round($total));
                    }else {
                    $total_avant=$poid_vide_avant+$nacellepanieravant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$signalisation_avant+$pto_avant+$option_avant+$divers_avant+$oil_avant;
                    $total_arriere=$poid_vide_arriere+$poid_n+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$signalisation_arriere+$pto_arriere+$option_arriere+$divers_arriere+$oil_arriere;
                    $total=$total_arriere+$total_avant;
                     echo(round($total));
                  }}
                  else if($_POST['choix'] != "plateau"){
                    $total_avant=$poid_vide_avant+$nacellepanieravant+$cadre_toit_avant+$fc_avant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$signalisation_avant+$pto_avant+$divers_avant+$oil_avant;
                    $total_arriere=$poid_vide_arriere+$poid_n+$cardre_toit_apres+$poidfcc+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$signalisation_arriere+$pto_arriere+$divers_arriere+$oil_arriere;
                    $total=$total_arriere+$total_avant;
                     echo(round($total));
                  }else {
                    $total_avant=$poid_vide_avant+$nacellepanieravant+$poid_ancrage_avant+$poid_choix_avant+$suspension_avant+$signalisation_avant+$pto_avant+$divers_avant+$oil_avant;
                    $total_arriere=$poid_vide_arriere+$poid_n+$poid_ancrage_apres+$poid_choix_arriere+$poid_suspension_arriere+$signalisation_arriere+$pto_arriere+$divers_arriere+$oil_arriere;
                    $total=$total_arriere+$total_avant;
                     echo(round($total));
                  }


                


                  




              if($total < 0 ){
                $erreur="Alerte de surcharge";
echo '<script type="text/javascript">'
 . 'alert(" '.$erreur.'");'
 
 . '</script>';



                $to = "ilhemmbarachee@gmail.com";
                $subject = "Alerte de surcharge";
                $body = "alerte de surcharge";
                // $headers = "From: ilhembarachee@gmail.com" . "\r\n";
                mail($to, $subject, $body);
                   






 
// $header="MIME-Version: 1.0\r\n";
// $header.='From:"Ilham Barache"<ilhemmbarachee@gmail.com>'."\n";
// $header.='Content-Type:text/html; charset="uft-8"'."\n";
// $header.='Content-Transfer-Encoding: 8bit';

// $message='
// <html>
// 	<body>
// 		<div align="center">
			
// 			<br />
// 			J\'ai envoyé ce mail avec PHP !
// 			<br />
			
// 		</div>
// 	</body>
// </html>
// ';

// mail("ilhembarachee@gmail.com", "Salut tout le monde !", $message, $header);



// $destinataire = "ilhembarachee@gmail.com";
// $sujet = "répartition des charges négative";
// $body = "Bonjour !";

           
              
            }
              
            
              ?>
   
            
            
                </th>
                
                <th> 
                <?php 



echo(round($total_avant));
?>
                </th>            
                <th >
                <?php 
                
                echo(round($total_arriere));
?>
                </th>
               
               <th>
               </th>

                

                
            </thead>

            <thead>
                
                <th >
            Charges utile
              </th>
              <th>
               <?php 
               
               
               

echo(round($_POST['ptac']-$total));
?>
                </th>
                
                <th> 
                <?php 


echo(round($poid_avant-$total_avant));



?>
                </th>            
                <th >
                <?php 
               echo(round($poid_arriere-$total_arriere));

?>
                </th>
                <th >
          
                </th>
               

                

                
            </thead>

            <thead>
                
                <th >
          Conducteur
              </th>
              <th>
               <?php 
               
               
               

echo(75);
?>
                </th>
                
                <th> 
                <?php 


$pos_conducteur=$empattement/3;

$conducteur_avant=75*(1-($pos_conducteur/$empattement));
echo(round($conducteur_avant));

?>
                </th>            
                <th >
                <?php 
                $conducteur_arriere=75-$conducteur_avant;
                echo(round($conducteur_arriere));

?>
                </th>
                <th >
                <?php 

echo(round($pos_conducteur));
?>
                </th>
               

                

                
            </thead>



            <thead>
                
                <th >
          Passager (s)
              </th>
              <th>
               <?php 
               
               
               
               $poid_passager=$_POST['nbrplace']*75;
echo($poid_passager);
?>
                </th>
                
                <th> 
                <?php 


$pos_passager=$empattement/3;

$passager_avant=$poid_passager*(1-($pos_passager/$empattement));
echo(round($passager_avant));

?>
                </th>            
                <th >
                <?php 
                $passager_arriere=$poid_passager-$passager_avant;
                echo(round($passager_arriere));

?>
                </th>
                <th >
                <?php 

echo(round($pos_passager));
?>
                </th>
               

                

                
            </thead>

            <thead>
                
                <th >
          Total
              </th>
              <th>
               <?php 
               
               
               $somme_avant=$total_avant+$conducteur_avant+$passager_avant;
               $somme_arriere=$total_arriere+$conducteur_arriere+$passager_arriere;
               $somme=$somme_avant+$somme_arriere;
               echo(round($somme));
?>
                </th>
                
                <th> 
                <?php 




echo(round($somme_avant));

?>
                </th>            
                <th >
                <?php 
               
                echo(round($somme_arriere));

?>
                </th>
                <th >
             
                </th>
               

                

                
            </thead>


            <thead>
                
                <th >
            Charges utile
              </th>
              <th>
               <?php 
               
               
               

echo(round($_POST['ptac']-$somme));
?>
                </th>
                
                <th> 
                <?php 


echo(round($poid_avant-$somme_avant));



?>
                </th>            
                <th >
                <?php 
               echo(round($poid_arriere-$somme_arriere));

?>
                </th>
                <th >
          
                </th>
               

                

                
            </thead>

            
            




               
               
          <?php } 
           else { ?>
Aucun résultat pour: <?= $q ?>...

<?php } ?>


        </table>



       
                 </div>
        </div>
    </div> 

  </div>  
  <!-- <?php
// if(isset($_GET["dwn"])) {

// // Entête pour Ouvrir avec MSExcel
// header("content-type: application/vnd.ms-excel");
// header("Content-Disposition: attachment; filename=".$_GET ["dwn"]);

// flush(); // Envoie le buffer
// readfile($_GET["dwn"]); // Envoie le fichier

// }?>


dans ta page, tu mets comme lien vers ton fichier excel

<A href="validationcommercial.php ?dwn=tonFicher.xls">Ficher Excel</A>  -->



</body>
</html>


