<?php
		require('connect.php');
		
$ncin=$_POST['ncin'];
$type=$_POST['type'];
$resp=$_POST['resp'];
$defen=$_POST['defen'];
$vol=$_POST['vol'];
$incen=$_POST['incen'];
$remor=$_POST['remor'];
$glace=$_POST['glace'];
$securi=$_POST['secur'];

			$sql="INSERT INTO `warranty` (`id`, `type`, `responsabilite_civile`, `defense_recours`, `vol`, `incendie`, `remorquage`, `glace`, `security`, `ncin`) VALUES (NULL, '$type', '$resp', '$defen', '$vol', '$incen', '$remor', '$glace', '$securi', '$ncin')";

			if($conn->query($sql) === TRUE)
			{
				echo "warranty effectue";
			} 
			else 
			{
				echo "erreur de creation: " . $conn->error;
			}
			
		?>
