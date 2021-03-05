<?php
// premier exercice
echo "1°) ";
class Narbonne{
	private $ville;
	private $departement;

	function construct($ville, $departement){
		$this->ville = $ville;
		$this->departement = $departement;
	}
	public function localisation(){
		echo "La ville " . $this->ville . " est dans le département " . $this->departement . ".";
	}
	public function Appville($ville){
		$this->ville = $ville;
	}
	public function Appdepartement($departement){
		$this->departement = $departement;
	}
}

$add = new Narbonne;
$add->Appville("Narbonne");
$add->Appdepartement("Aude");
$add->localisation();

// second exercice
echo " <br/> 2°) ";
class Ville{
	private $ville1;
	private $ville2;
	private $departement;

	function construct($ville1, $ville2, $departement){
		$this->villeUne = $ville1;
		$this->villeDeux = $ville2;
		$this->departement = $departement;
	}
	public function localisation(){
		echo "La ville " . $this->villeUne . " est dans le département " . $this->departement . ". <br/>";
		echo "La ville " . $this->villeDeux . " est dans le département " . $this->departement . ".";
	}
	public function AppvilleUne($ville1){
		$this->villeUne = $ville1;
	}
	public function AppvilleDeux($ville2){
		$this->villeDeux = $ville2;
	}
	public function Appdepartement($departement){
		$this->departement = $departement;
	}
}

$add = new Ville;
$add->AppvilleUne("Narbonne");
$add->AppvilleDeux("Carcassonne");
$add->Appdepartement("Aude");
$add->localisation();

?>

<!DOCTYPE html>
<html>
<head>
	<meta lang="fr">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device_width, initial-scale=1.0, user-scalable=no">
	<title>Exercice PDO</title>
</head>
<body>
</body>
</html>