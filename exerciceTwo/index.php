<?php
// premier exercice
echo "1°) ";
class AdditionClass{
	private $a;
	private $b;

	function construct($a, $b){
		$this->a = $a;
		$this->b = $b;
	}
	public function addition(){
		echo $this->a + $this->b;
	}
	public function appA($a){
		$this->a = $a;
	}
	public function appB($b){
		$this->b = $b;
	}
}

$add = new AdditionClass;
$add->appA(4);
$add->appB(4);
$add->addition();

// second exercice
echo " <br/> 2°) ";
class MoyenneClass{
	private $a;
	private $b;

	function constructBis($a, $b){
		$this->a = $a;
		$this->b = $b;
	}
	public function moyenne(){
		echo ($this->a + $this->b)/2;
	}
	public function appliA($a){
		$this->a = $a;
	}
	public function appliB($b){
		$this->b = $b;
	}
}

$add = new MoyenneClass;
$add->appliA(4);
$add->appliB(4);
$add->moyenne();
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