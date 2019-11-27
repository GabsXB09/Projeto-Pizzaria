<?php
   require_once '../persistence/dao_josegabriel.php';
   
   $objeto = new JoseGabriel();
   $objeto->setJose($_REQUEST['nome']);
   $objeto->setGabriel($_REQUEST['sobrenome']);
   
   $dao = new DAOJoseGabriel();
   $dao->cadastrarJoseGabriel($objeto); 
 	
	header('Location: ../view/view_josegabriel.php');
	exit;
?>