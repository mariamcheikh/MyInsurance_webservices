<?php
		require('connect.php');
		
$ncin=$_POST['ncin'];
$profession=$_POST['profession'];
$adr=$_POST['adress'];
$ville=$_POST['city'];
$cpost=$_POST['postal_code'];

		
			$sql="UPDATE `subscriber` SET `profession` = '$profession', `adress` = '$adr', `city` = '$ville', `postal_code` = '$cpost' WHERE `subscriber`.`ncin` = $ncin";

			if($conn->query($sql) === TRUE)
			{
				echo "infos maj";
			} 
			else 
			{
				echo "erreur de maj: " . $conn->error;
			}
			
		?>
