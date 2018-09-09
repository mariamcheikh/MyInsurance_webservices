<?php
/**
 * Created by PhpStorm.
 * User: Mariam
 * Date: 05/12/2017
 * Time: 00:43
 */

require('connect.php');

$date=$_POST["date"];
$heure=$_POST['heure'];
$lieu=$_POST['lieu'];
$blesse=$_POST['blesse'];
$degat=$_POST['degat'];
$temoins=$_POST['temoins'];
$vehiculeassure=$_POST['vehiculeassure'];
$contratassure=$_POST['contratassure'];
$agence=$_POST['agence'];
$attestationdu=$_POST['attestationdu'];
$attestationau=$_POST['attestationau'];
$nomConducteur=$_POST['nomConducteur'];
$prenomConducteur=$_POST['prenomConducteur'];
$addresseConducteur=$_POST['addresseConducteur'];
$permisConducteur=$_POST['permisConducteur'];
$permisdelivre=$_POST['permisdelivre'];
$nomassure=$_POST['nomassure'];
$prenomasure=$_POST['prenomasure'];
$addresseassure=$_POST['addresseassure'];
$telassure=$_POST['telassure'];
$marquevoiture=$_POST['marquevoiture'];
$immatriculation=$_POST['immatriculation'];
$senssuivis=$_POST['senssuivis'];
$venantde=$_POST['venantde'];
$allanta=$_POST['allanta'];
$degatapparents=$_POST['degatapparents'];
$observations=$_POST['observations'];
$stationnement=$_POST['stationnement'];
$quiterstationnement=$_POST['quiterstationnement'];
$prenantstationnement=$_POST['prenantstationnement'];
$sortantParking=$_POST['sortantParking'];
$engagerparking=$_POST['engagerparking'];
$arretcirculation=$_POST['arretcirculation'];
$frottement=$_POST['frottement'];
$heurtaitarriere=$_POST['heurtaitarriere'];
$roulermemesens=$_POST['roulermemesens'];
$changementfile=$_POST['changementfile'];
$doublait=$_POST['doublait'];
$viraitdroite=$_POST['viraitdroite'];
$viraitgauche=$_POST['viraitgauche'];
$reculait=$_POST['reculait'];
$chausse=$_POST['chausse'];
$carrefour=$_POST['carrefour'];
$priorite=$_POST['priorite'];
$vehiculeassureA=$_POST['vehiculeassureA'];
$contratassureA=$_POST['contratassureA'];
$agenceA=$_POST['agenceA'];
$attestationduA=$_POST['attestationduA'];
$attestationauA=$_POST['attestationauA'];
$nomConducteurA=$_POST['nomConducteurA'];
$prenomConducteurA=$_POST['prenomConducteurA'];
$addresseConducteurA=$_POST['addresseConducteurA'];
$permisConducteurA=$_POST['permisConducteurA'];
$permisdelivreA=$_POST['permisdelivreA'];
$nomassureA=$_POST['nomassureA'];
$prenomasureA=$_POST['prenomasureA'];
$addresseassureA=$_POST['addresseassureA'];
$telassureA=$_POST['telassureA'];
$marquevoitureA=$_POST['marquevoitureA'];
$immatriculationA=$_POST['immatriculationA'];
$senssuivisA=$_POST['senssuivisA'];
$venantdeA=$_POST['venantdeA'];
$allantaA=$_POST['allantaA'];
$degatapparentsA=$_POST['degatapparentsA'];
$observationsA=$_POST['observationsA'];
$stationnementA=$_POST['stationnementA'];
$quiterstationnementA=$_POST['quiterstationnementA'];
$prenantstationnementA=$_POST['prenantstationnementA'];
$sortantParkingA=$_POST['sortantParkingA'];
$engagerparkingA=$_POST['engagerparkingA'];
$arretcirculationA=$_POST['arretcirculationA'];
$frottementA=$_POST['frottementA'];
$heurtaitarriereA=$_POST['heurtaitarriereA'];
$roulermemesensA=$_POST['roulermemesensA'];
$changementfileA=$_POST['changementfileA'];
$doublaitA=$_POST['doublaitA'];
$viraitdroiteA=$_POST['viraitdroiteA'];
$viraitgaucheA=$_POST['viraitgaucheA'];
$reculaitA=$_POST['reculaitA'];
$chausseA=$_POST['chausseA'];
$carrefourA=$_POST['carrefourA'];
$prioriteA=$_POST['prioriteA'];
$user_id=$_POST['user_id'];

$sql="INSERT INTO `constat` (`date`, `heure`, `lieu`,`blesse`, `degat`, `temoins`,`vehiculeassure`, `contratassure`, `agence`,`attestationdu`, `attestationau`, `nomConducteur`,
`prenomConducteur`, `addresseConducteur`, `permisConducteur`,
`permisdelivre`, `nomassure`, `prenomasure`,`addresseassure`, `telassure`, `marquevoiture`,`immatriculation`, `senssuivis`, `venantde`,`allanta`, `degatapparents`,
 `observations`,`stationnement`, `quiterstationnement`, `prenantstationnement`,`sortantParking`, `engagerparking`, `arretcirculation`,`frottement`, `heurtaitarriere`, `roulermemesens`,
`changementfile`, `doublait`, `viraitdroite`,`viraitgauche`, `reculait`, `chausse`,`carrefour`, `priorite`, `vehiculeassureA`,`contratassureA`,`agenceA`, `attestationduA`, `attestationauA`,
`nomConducteurA`, `prenomConducteurA`, `addresseConducteurA`,`permisConducteurA`, `permisdelivreA`, `nomassureA`,`prenomasureA`, `addresseassureA`, `telassureA`,
`marquevoitureA`, `immatriculationA`, `senssuivisA`,`venantdeA`, `allantaA`, `degatapparentsA`
,`observationsA`, `stationnementA`, `quiterstationnementA`,`prenantstationnementA`, `sortantParkingA`, `engagerparkingA`,`arretcirculationA`, `frottementA`, 
`heurtaitarriereA`,`roulermemesensA`, `changementfileA`, `doublaitA`,`viraitdroiteA`, `viraitgaucheA`, `reculaitA`, `chausseA`, `carrefourA`,`prioriteA`,`user_id`
) VALUES 

('$date', '$heure','$lieu','$blesse', '$degat','$temoins','$vehiculeassure', '$contratassure','$agence','$attestationdu', '$attestationau','$nomConducteur','$prenomConducteur',
 '$addresseConducteur','$permisConducteur','$permisdelivre', '$nomassure','$prenomasure','$addresseassure', '$telassure','$marquevoiture','$immatriculation', '$senssuivis','$venantde'
 ,'$allanta', '$degatapparents','$observations',
'$stationnement', '$quiterstationnement','$prenantstationnement','$sortantParking', '$engagerparking','$arretcirculation','$frottement', '$heurtaitarriere','$roulermemesens',
'$changementfile', '$doublait','$viraitdroite','$viraitgauche', '$reculait',
'$chausse','$carrefour', '$priorite','$vehiculeassureA', '$contratassureA','$agenceA','$attestationduA', '$attestationauA','$nomConducteurA','$prenomConducteurA',
 '$addresseConducteurA','$permisConducteurA','$permisdelivreA', '$nomassureA','$prenomasureA','$addresseassureA', '$telassureA','$marquevoitureA','$immatriculationA', '$senssuivisA',
 '$venantdeA'
 ,'$allantaA', '$degatapparentsA','$observationsA',
'$stationnementA', '$quiterstationnementA','$prenantstationnementA','$sortantParkingA', '$engagerparkingA','$arretcirculationA','$frottementA', '$heurtaitarriereA','$roulermemesensA',
'$changementfile', '$doublait','$viraitdroite','$viraitgauche', '$reculait',
'$chausseA','$carrefourA', '$prioriteA','$user_id')";

if($conn->query($sql) === TRUE)
{

    //echo "constat cree";

    $id=$conn->insert_id;
    echo json_encode($id);
}
else
{
    echo "erreur de creation: " . $conn->error;
}

?>

