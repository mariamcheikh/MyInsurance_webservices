<?php
/**
 * Created by PhpStorm.
 * User: Mariam
 * Date: 29/05/17
 * Time: 8:39 PM
 */

require_once '../includes/DbOperation.php';

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	
        $db = new DbOperation();
        if ($db->selectDrivers()) {
            $response['error'] = false;
            $response['driver'] = $db->selectDrivers();
        } else {
            $response['error'] = true;
            $response['message'] = 'Cannot select Drivers';
        }

} else {
    $response['error'] = true;
    $response['message'] = "Request not allowed";
}

echo json_encode($response);