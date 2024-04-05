<?php
require './db.php';

$isAuth = false;


function login($data){
  $conn = connDB();

  $sql = "SELECT 
    u.*,
    c.nicename,
    c.iso3
    FROM user as u 
    LEFT JOIN `country` as c ON u.countryid= c.id  
    WHERE u.email = '" . $data['email']. "' AND u.password = '".$data['password']."' LIMIT 1";

  $stmt = $conn->query($sql);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $userInfo = $results[0];
  unset($userInfo['roll']);

  $conn = null;
  return $userInfo;

}

function register($data){
  $conn = connDB();

  $sql = "INSERT INTO `user` (`id`, `FName`, `LName`, `email`, `phone`, `countryId`, `birthdate`, `password`, `roll`) VALUES (NULL, '".$data['fName']."', '".$data['lName']."', '".$data['email']."', '".$data['phone']."', '".$data['country']."', '".$data['birthday']."', '".$data['password']."', 'user');";

  $conn->exec($sql);

  return login($data);
}

function registerOrder($data){
  $conn = connDB();
  $response='';

  $sql = "SELECT * FROM user WHERE email = '" . $data['email'] . "';";


  $stmt = $conn->query($sql);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $orderId= null;
  foreach ($results as $row) {
    if ($row['password'] == $data['password']) {

      $id= $row['id'];

      $insertSql="INSERT INTO `userorder` (`id`, `userId`, `totalPrice`, `totalQuantity`, `createdon`, `status`, `toCountryId`, `address`, `shippingId`) VALUES (NULL, '".$id."', '".$data['totalPrice']."', '".$data['totalQuantity']."', '".$data['createdOn']."', '".$data['status']."', '".$data['toCountryId']."', '".$data['address']."', '".$data['shippingMethod']."');";

      $conn->exec($insertSql);
      $orderId= $conn->lastInsertId() ;
      
      $response = true;
      break;
    } else {
      $response = false;
    }
  }

  $items = $data['items'];
  foreach ($items as $item) {
    $insertProductToOrder="INSERT INTO `orderproduct` (`id`, `userorderId`, `productId`, `quantity`) VALUES (NULL, '".$orderId."', '".$item["product"]["id"]."', '".$item["qty"]."');";
    
    $conn->exec($insertProductToOrder);
  }

  $conn = null;
  return $response;
}

function allCountries(){
  $conn = connDB();
  $sql = "SELECT * FROM `country`";
  // $conn->exec($sql);
  $stmt = $conn->query($sql);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $record = array();
  foreach ($results as $row) {
    // $record =  $row['F'] . ' - ' . $row['username'] . '<br>';
    array_push($record, $row);
    // $record =  $row;
  }
  $conn = null;
  return $record;
}

function shippigMethods(){
  $conn = connDB();
  $sql = "SELECT * FROM `shippingmethod`";
  // $conn->exec($sql);
  $stmt = $conn->query($sql);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $record = array();
  foreach ($results as $row) {
    // $record =  $row['F'] . ' - ' . $row['username'] . '<br>';
    array_push($record, $row);
    // $record =  $row;
  }
  $conn = null;
  return $record;
}

function allProducts(){
  $conn = connDB();
  $sql = "SELECT product.*, category.name AS categoryName
          FROM product
          INNER JOIN category ON product.categoryId = category.id
          ";

  // $conn->exec($sql);
  $stmt = $conn->query($sql);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $record = array();
  foreach ($results as $row) {
    // $record =  $row['F'] . ' - ' . $row['username'] . '<br>';
    array_push($record, $row);
    // $record =  $row;
  }
  $conn = null;
  return $record;
}

function bestOffers(){
  $conn = connDB();
  $sql = "SELECT product.*, category.name AS categoryName
          FROM `product` 
          INNER JOIN category ON product.categoryId = category.id
          WHERE `offerRate` IS NOT NULL 
          ORDER BY `offerRate` DESC 
          LIMIT 8;
          ";
  // $conn->exec($sql);
  $stmt = $conn->query($sql);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $record = array();
  foreach ($results as $row) {
    // $record =  $row['F'] . ' - ' . $row['username'] . '<br>';
    array_push($record, $row);
    // $record =  $row;
  }
  $conn = null;
  return $record;
}

function latestProducts(){
  $conn = connDB();
  $sql = "SELECT product.*, category.name AS categoryName
    FROM product
    INNER JOIN category ON product.categoryId = category.id
    ORDER BY arriveDate DESC
    LIMIT 8;
  ";

  $stmt = $conn->query($sql);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $record = array();
  foreach ($results as $row) {
    // $record =  $row['F'] . ' - ' . $row['username'] . '<br>';
    array_push($record, $row);
    // $record =  $row;
  }
  $conn = null;
  return $record;
}

function productsByCategoryId($id){
  $conn = connDB();
  $sql = "SELECT product.*, category.name AS categoryName
    FROM product
    INNER JOIN category ON product.categoryId = category.id
    WHERE category.id = " .$id. "
    ORDER BY arriveDate DESC
  ";

  $stmt = $conn->query($sql);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $record = array();
  foreach ($results as $row) {
    // $record =  $row['F'] . ' - ' . $row['username'] . '<br>';
    array_push($record, $row);
    // $record =  $row;
  }
  $conn = null;
  return $record;
}

function getOrders($data){
  $conn = connDB();
  $response= false;
  $orders=Array();

  $loginSql = "SELECT * FROM user WHERE email = '" . $data['email'] . "';";


  $stmt = $conn->query($loginSql);
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $userId= null;
  foreach ($results as $row) {
    if ($row['password'] == $data['password']) {

      $userId= $row['id'];

      // $ordersSql= "SELECT * FROM `userorder` WHERE `userId` = ".$userId;
      $ordersSql= "SELECT 
        o.id,
        o.userId,
        o.totalPrice,
        o.totalQuantity,
        o.createdon,
        o.status,
        o.toCountryId,
        o.shippingId,
        o.address,
        c.iso3,
        c.name as tocountry,
        c.phonecode,
        s.name as shipping_name,
        s.cost as shipping_cost
        FROM `userorder` as o
        INNER JOIN `country` as c ON o.toCountryId = c.id 
        INNER JOIN `shippingmethod` as s ON o.shippingId = s.id
        WHERE o.userId = ".$userId;

      $stmt = $conn->query($ordersSql);
      $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
      break;
    }
  }

  $allOrders=Array();
  if(count($orders)>0){
    foreach ($orders as $order) {
      $orderItemsSql="SELECT * FROM `orderproduct` WHERE `userorderId` = ".$order['id'];
      $stmt = $conn->query($orderItemsSql);
      $orderItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $tempOrder = $order;
      $tempOrder['items'] = $orderItems;
      array_push($allOrders, $tempOrder);
    }
  }

  $conn = null;
  return $allOrders;
}

