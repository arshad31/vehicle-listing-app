<?php 

require_once '../../app/Classes/VehicleManager.php';

$id = 2;

$updatedVehicle = [
    'name' => 'BMW',
    'type' => 'Electric Car',
    'price' => 500000,
    'image' => 'https://shorturl.at/2f7sC'
];

$vehicleManager = new VehicleManager('','','', '');
$vehicleManager->editVehicle($id, $updatedVehicle);

echo "Vehicle with ID $id updated successfully!";
