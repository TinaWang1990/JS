<?php
//question 1
echo "<h2>Question 1</h2>";
class Point{

	private $x;
	private $y;

	public function __construct($x, $y){
		$this->x = $x;
		$this->y = $y;
	}

	public function get_x(){
		return $this->x;
	}

	public function get_y(){
		return $this->y;
	}

	public function moveTo($x, $y){
		$this->x = $x;
		$this->y = $y;
	}

	public function move($x, $y){
		$this->x += $x;
		$this->y += $y;
	}

	public function getLocation(){
		echo "x_coordiate: ".$this->x.", y_coordinate: ".$this->y.".<br>";
	}

	public function distance($p){
		$d_2 = pow($this->x-$p->get_x(), 2) + pow($this->y-$p->get_y(), 2);
		echo "Distance from (".$this->get_x().",".$this->get_y().") to (".$p->get_x().",".$p->get_y()."): ".sqrt($d_2).".<br>";
	}
}

$p1 = new Point(2, 3);
$p2 = new Point(4, 5);
$p1->getLocation();
$p1->distance($p2);


echo "<h2>Question 2</h2>";
//question 2
class Translate{
	public static function Oct_Bin($n){
		if(is_numeric($n)){
			$n = (string)$n;
		}
		$bin_str = "";
		for ($i=0; $i < strlen($n); $i++) { 
			switch ($n[$i]) {
				case '0':
					$bin_str .= "000";
					break;
				case '1':
					$bin_str .= "001";
					break;
				case "2":
					$bin_str .= "010";
					break;	
				case "3":
					$bin_str .= "011";
					break;
				case "4":
					$bin_str .= "100";
					break;	
				case "5":
					$bin_str .= "101";
					break;
				case "6":
					$bin_str .= "110";
					break;	
				case "7":
					$bin_str .= "111";
					break;		
			}
		}
		echo "Oct(".$n.") to Bin(".(int)$bin_str.")<br>";
	}

	public static function Bin_Oct($n){
		if(is_numeric($n)){
			$n = (string)$n;
		}
		$n_str=$n;
		if(strlen($n)%3==1){
			$n_str = "00".$n_str;
		}else if(strlen($n)%3==2){
			$n_str = "0".$n_str;
		}

		$n_arr = str_split($n_str,3);
		$oct_str = "";
		foreach ($n_arr as $v) {
			switch ($v) {
				case '000':
					$oct_str .= "0";
					break;
				case '001':
					$oct_str .= "1";
					break;
				case "010":
					$oct_str .= "2";
					break;	
				case "011":
					$oct_str .= "3";
					break;
				case "100":
					$oct_str .= "4";
					break;	
				case "101":
					$oct_str .= "5";
					break;
				case "110":
					$oct_str .= "6";
					break;	
				case "111":
					$oct_str .= "7";
					break;		
			}
		}
		echo "Bin(".$n.") to Oct(".(int)$oct_str.")<br>";
	}
}

Translate::Oct_Bin(117);
Translate::Bin_Oct(1001111);




echo "<h2>Question 3</h2>";
function factorial( $n ) {
 
  // Base case
  if ( $n == 1 ) {
    echo "Base case: \$n = 1. Returning 1...<br>";
    return 1;
  }
 
  // Recursion
  echo "\$n = $n: Computing $n * factorial( " . ($n-1) . " )...<br>";
  $result =  $n * factorial( $n-1 ) ;
  echo "Result of $n * factorial( " . ($n-1) . " ) = $result. Returning $result...<br>";
  return $result;
}
 
echo "The factorial of 5 is: " . factorial( 5 );
 
