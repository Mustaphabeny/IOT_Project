<!DOCTYPE html>
<html>

<body>
	<?php
	$a=$_GET['idproduit'];
	$conn = mysqli_connect('localhost', 'root', '', 'iotproduct');
	$requete = "DELETE FROM produit WHERE idproduit='$a' "; 
	$reponse = mysqli_query($conn,$requete);

	if($reponse==true)
	{ 
		header("location: Gproduit.php");
	}
	else
	{
		echo "echec de suppression";
		echo $_GET['Idproduit'];
	}
	mysqli_close($conn);
	?>
</body>
</html>
