<?php 

class Point{
	private $x;
	private $y;

	public function __construct($x,$y){
		$this->x = $x;
		$this->y=$y;
	}


	public function getX(){
		return $this->x;
	}

	public function getY(){
		return $this->y;
	}


	public function __toString(){
		return "bu yerda  (".$this->x."; ".$this->y.")";
	}


	public function setX($x){
		$this->x = $x;
	}

	public function setY($y){
		$this->y = $y;
	}

	public function setPoint($point){
		$this->x = $point->x;
		$this->y = $point->y;
	}

	public function getdistance($point_1){
		return sqrt($this->getPow2($point));
	}

	private function getPow2($point){
		return 	pow(($this->x - $point->x),2) + pow(($this->y - $point->y),2);
	}

	public function __destruct(){
		echo "<br/> obyekt unejtojen";
	}

	
}

	$point = new Point(5, 7);
	echo $point ."<br/>";
	$point->setX(10);
	$point->setY(12);
	echo $point ."<br/>";
	$point_1 = new point (9, 11);
	echo $point->getDistance($point_1);





	/*class Point{
	public $x;
	public $y;

	public function __construct($x,$y){
		$this->x = $x;
		$this->y=$y;
	}


	public function getX(){
		return $this->x;
	}


	public function __toString(){
		return "bu yerda  (".$this->x."; ".$this->y.")";
	}


	public function setX($x){
		$this->x = $x;
	}

	public function setPoint($point){
		$this->x = $point->x;
		$this->y = $point->y;
	}

	public function __destruct(){
		echo "<br/> obyekt unejtojen";
	}

	
}

	$point = new Point(5, 7);
	echo $point->x."<br />";
	echo $point->y."<br />";

	$point->y = 100;
	echo $point->y."<br />";
	echo $point->getX()."<br/>";
	$point->setX(10);
	echo $point->getX()."<br/>";
	echo $point."<br/>";


	$point_1 = new Point(15, -7);
	$point->setPoint($point_1);
	echo $point;	
	*/

 ?>