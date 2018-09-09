<?php
		require('connect.php');
		
$ncin=$_POST['ncin'];
$num=$_POST['num'];
$dateP=$_POST['datep'];
		
			$sql="UPDATE `subscriber` SET `date_permis` = '$dateP', `num_permis` = '$num' WHERE `subscriber`.`ncin` = $ncin";

			if($conn->query($sql) === TRUE)
			{
				echo "permis ajoute";
			} 
			else 
			{
				echo "erreur d ajout: " . $conn->error;
			}
			
		?>
