<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
define("SERVEUR","localhost");
define("NOMBASE","iotproduct");
define("USER","root");
define("MDP","");

$conn=mysqli_connect(SERVEUR,USER,MDP,NOMBASE);


if(mysqli_connect_errno())
{
	printf("echec:%s",mysqli_connect_error());
    exit();
}
$idproduit =$_POST['Idproduit'];
$des = $_POST['designation'];
$dateachat = $_POST['dateachat'] ;
$prix = $_POST['prix'];
$idclient = $_POST['IdClient'];


$requete="INSERT INTO produit (idproduit, designation, dateachat, prix, idclient) VALUES ( '$idproduit', '$des', '$dateachat', '$prix', '$idclient' )";

	
		if(mysqli_query($conn,$requete)){
		echo "Le Produit est bien ajouté <a href= '../admin/Gproduit.php'>Merci</a>  ";
			}
			else{echo "erreur";}

		
	
	
		


?>
</body>
</html>