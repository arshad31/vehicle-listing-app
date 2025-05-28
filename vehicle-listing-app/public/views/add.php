<?php 

require_once '../../app/Classes/VehicleManager.php';

$newVehicle = [
    'name' => 'Tesla',
    'type' => 'Electric',
    'price' => 500000,
    'image' => 'https://shorturl.at/Kn89z'
];

$vehicleManager = new VehicleManager('','','', '');
$vehicleManager->addVehicle($newVehicle);

echo "Vehicle added successfully!";
