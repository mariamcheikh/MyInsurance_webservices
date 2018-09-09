<?php
		require('connect.php');
		
$ncin=$_POST['ncin'];
$num=$_POST['num'];
$marque=$_POST['marque'];
$modele=$_POST['modele'];
$immat=$_POST['immat'];
$cv=$_POST['cv'];
$dCirc=$_POST['dcirc'];
$energie=$_POST['energie'];
		
		
			$sql="INSERT INTO `voiture` (`id`, `serial_num`, `marque`, `modele`, `energie`, `cv_fiscaux`, `immat`, `date_circul`, `ncin_owner`) VALUES (NULL, '$num', '$marque', '$modele', '$energie', '$cv', '$immat', '$dCirc', '$ncin')";

			if($conn->query($sql) === TRUE)
			{
				echo "voiture cree";
			} 
			else 
			{
				echo "erreur de creation: " . $conn->error;
			}
			
		?>
