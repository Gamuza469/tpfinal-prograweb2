<?php

	require("../persistence/ClienteDaoImpl.php");

	$hola = "No lo se!";

	echo($hola);
	echo("<br/>Que tal!");
	//phpinfo();

	$clienteDaoInstance = new ClienteDaoImpl();
	$clienteDaoInstance = $clienteDaoInstance->getInstance();

	$result = $clienteDaoInstance->findAll();

	echo ($result[0]->getCuit());

?>