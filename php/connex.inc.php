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

	
	?>