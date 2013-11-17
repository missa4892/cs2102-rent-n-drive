<?php

putenv('ORACLE_HOME=/oraclient');

// connect
$conn = oci_connect('a0084053', 'db2013s1', 'sid3.comp.nus.edu.sg');


//BASIC SEARCH!!!---------------------------------------------------------------------------------------------------
	if(array_key_exists('check_basic', $_POST)) {
		$collectDate = $_POST['collectDate'];
		$returnDate = $_POST['returnDate'];
		echo($collectDate + "/r/n");
		echo ($returnDate + "/r/n");


		if(isset($_POST['vehicle'])){
			$vehicleSelected = $_POST['vehicle'];

			$count = count($vehicleSelected);

			$motorcycle = 0;
			$bus = 0;
			$car = 0;


			for($i=0; $i < $count; $i++) {

				if($vehicleSelected[$i] == "Motorcycle"){
    				$motorcycle = 1;
    			} else if ($vehicleSelected[$i] == "Cars") {
    				$car= "1";
    			} else if ($vehicleSelected[$i] == "Bus") {
    				$bus = "1";
    			}
    		}


			$tables = " ";

			if ($count == 1) { //only 1 selected
		
				if($motorcycle == 1) {
					$tables .= "MOTORCYCLES m "; 
				}

				if($car == 1) {
					$tables .= "CARS c ";
				}

				if($bus == 1) {
					$tables .= "BUS b ";
				}

			} else if ($count >= 2) { // if more than 2 selected

					// add MOTORCYCLES table
				if($motorcycle == 1) {
					$tables .= "MOTORCYCLES m, ";
				}

				//add CARS table
				if ($car == 1) {
					$tables .= "CARS c";
				}


				//add BUS table
				if($bus == 1 && $motorcycle == 1 && $car == 0) {
					$tables .= "BUS b";
				} else if ($bus == 1 && $car == 1) {
					$tables .= ", ";
					$tables .= "BUS b";
				} 

			}
		}

		// add RENTS table
		$dates = 0;
		if (!empty($collectDate) && !empty($returnDate)) {
			$tables .= ", RENTS r ";
			$dates = 1; // dates do exist
 		}

 	 	$attList = " ";	
 	 	$attM = 0;
 	 	$attC = 0;
 	 	$attB = 0;

 		if($count == 1) {

			if ($dates == 1 && $motorcycle == 1){
				$attList .= "r.vehicleNo = m.vehicleNo";
				$attM = 1;
			}

			if ($dates == 1 && $car == 1) {
				$attList .= "r.vehicleNo = c.vehicleNo";
				$attC = 1;
			}

			if ($dates == 1 && $bus == 1) {
				$attList .= "r.vehicleNo = b.vehicleNo";
				$attB = 1;
			}
 		} else if ($count >= 2) {

 				// add MOTORCYCLES table
				if($motorcycle == 1) {
					$attList .= "r.vehicleNo = m.vehicleNo || ";
				}

				//add CARS table
				if ($car == 1) {
					$attList .= "r.vehicleNo = c.vehicleNo ";
				}


				//add BUS table
				if($bus == 1 && $motorcycle == 1 && $car == 0) {
					$attList .= "r.vehicleNo = b.vehicleNo ";
				} else if ($bus == 1 && $car == 1) {
					$attList .= " || ";
					$attList .= "r.vehicleNo = b.vehicleNo ";
				}
 		}

 		// for the dates constraint
 		if ($dates == 1) {
 			$attList .= "AND ((" . $collectDate ."< r.rentDate AND " . $returnDate . "< r.returnDate) OR 
 				(" . $collectDate ."> r.rentDate AND " . $returnDate . "> r.returnDate))";    
 		}

		$query = "SELECT * FROM $tables WHERE $attList";
		echo $query;
	}

	$sth = oci_parse($conn, $query);
	if(oci_execute($sth, OCI_DEFAULT)) {
		echo(" SUCCESS");
		while (oci_fetch_array($sth)){
			echo "lalalal";
		}
	} else echo("help!!");

// END OF BASIC SEARCH------------------------------------------------------------------------------------------------------


// commit
oci_commit($conn);

// disconnect
oci_close($conn);
?>