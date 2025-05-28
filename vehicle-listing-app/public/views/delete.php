<?php 

require_once '../../app/Classes/VehicleManager.php';

$id = 2;

$vehicleManager = new VehicleManager('','','', '');
$vehicleManager->deleteVehicle($id);

echo "Vehicle with ID $id deleted successfully!";
