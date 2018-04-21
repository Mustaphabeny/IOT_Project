<!DOCTYPE html>
<html>

<body>
	<?php
	$a=$_GET['id'];
	$conn = mysqli_connect('localhost', 'root', '', 'iotproduct');
	$requete = "DELETE FROM client WHERE idClient='$a' "; 
	$reponse = mysqli_query($conn,$requete);

	if($reponse==true)
	{ 
		header("location:Gclient.php");
	}
	else
	{
		echo "echec de suppression";
		echo $_GET['id'];
	}
	mysqli_close($conn);
	?>
</body>
</html>
