<?php
    require_once 'conexao.php';
	require_once '../model/class_josegabriel.php'; 
	
	class DAONomeSobreNome{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
			 if($this->conexao->conectar() == false){
			 	 echo "Não conectou!" . mysql_error();	
			 }
		
		}	
		
		public function cadastrarNomeJoseGabriel(JoseGabriel $josegabriel){
			$nome = $josegabriel->getNome();
			$sobrenome = $josegabriel->getSobreNome(); 

			$sql = "INSERT INTO josegabriel (jose, gabriel) VALUES ('$nome', '$sobrenome')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarJoseGabriel(){
			$listaJoseGabriel = $this->conexao->executarQuery("SELECT * FROM josegabriel");
			$arrayJoseGabriel = array();
			
			while ($linhaJoseGabriel = mysqli_fetch_array($listaJoseGabriel)) {
				$JoseGabriel = new JoseGabriel($linhaJoseGabriel['codigo'],$linhaJoseGabriel['primeiroNome'],$linhaJoseGabriel['ultimoNome']);
				array_push($arrayJoseGabriel,$JoseGabriel);
			}
			return $arrayJoseGabriel;
		}
		
		public function removerJoseGabriel($codigo){
			$sql = "DELETE FROM josegabriel WHERE codigo = '$codigo'";
			$this->conexao->executarQuery($sql);
		}	
	}	
?>