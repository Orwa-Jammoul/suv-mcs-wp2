<?php
require './server.php';



// Get the requested URI
$requestUri = $_SERVER['REQUEST_URI'];

// Extract the data identifier from the URI
$arrUri = explode('/', $requestUri);
$apiName = strtolower(end($arrUri));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $payload = file_get_contents('php://input');
  // Decode JSON payload if applicable
  $data = json_decode($payload, true);

  // Define the data for each API endpoint  login($data)
  header('Content-Type: application/json');
  switch ($apiName) {
    case "auth":
      echo json_encode(['data' => login($data),'ok'=>true]);
      break;
    case "register":
      echo json_encode(['data' => register($data),'ok'=>true]);
      break;
    case "registerorder":
      echo json_encode(['data' => registerOrder($data),'ok'=>true]);
      break;
    case "orders":
      echo json_encode(['data' => getOrders($data),'ok'=>true]);
      break;
    default:
      // Return an error response if the data identifier is not found
      echo json_encode(['error' => 'Data not found','ok'=>false]);
  }
  
} 
