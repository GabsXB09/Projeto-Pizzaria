<?php

   require_once '../persistence/dao_josegabriel.php';
   
   $objetoDao = new DAOJoseGabriel();
   $objetoDao->removerJoseGabriel($_REQUEST['codigo']);
 	
	header('Location: ../view/view_josegabriel.php');
	exit;
?>