<?php 
$data_string = file_get_contents('dischi.json');
$dischi = json_decode($data_string, true);

header('Content-type: application/json');

$response = [
    'results' => $dischi,
    'success' => true
  ];
  
echo json_encode($response);