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
$idclient =$_POST['idclient'];
$nom = $_POST['Nom'];
$password = $_POST['password'] ;
$mail = $_POST['email'];
$adresse = $_POST['adresse'];
$login = $_POST['login'];
$numtel = $_POST['numtel'];
$dateinscri = $_POST['dateinscri'];

$requete="INSERT INTO client (adresse, dateinscri, email, idclient, login, nom, numtel, password ) VALUES ( '$adresse','$dateinscri','$mail', '$idclient', '$login', '$nom', '$numtel', '$password' )";

	
		if(mysqli_query($conn,$requete)){
		echo "Le Client est bien ajouté <a href= '../admin/Gclient.php'>Merci</a>  ";
			}
			else{echo "string";}

		
	
	
		


?>
</body>
</html>