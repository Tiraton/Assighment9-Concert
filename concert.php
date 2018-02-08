<?php

$count = 0;
$totalPrice = 0;

$type = array("a"=> 3000, "b"=>2000, "c" => 1000);

foreach ($type as $type => $price) {

	for($i = 1; $i<=3 ; $i++){

		if(isset($_POST["$type$i"])){

			$count++;

			if("$type$i" == 'a3'){

				echo "Congraduation!! This is 50% discount ticket!.<br>";
				$totalPrice += $price*0.5;

			}else{

				$totalPrice += $price;
			}
			
			echo strtoupper($type)."$i :$price <br>";
		}
	}
}

if($count == 0){

	echo "You need to buy at least one ticket.";

}else{

	echo "number of seat: ".$count."<br>";
	echo "Total price is: ".$totalPrice ."<br>";
}

?>