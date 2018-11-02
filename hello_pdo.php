<?php

require __DIR__. '/__connect_db.php';
try {
    //$stmt = $pdo->query("SELECT * FROM address_book");
    $stmt = $pdo->query("SELECT 2+3");
    $data_ar = $stmt->fetchAll();
    echo json_encode($data_ar, JSON_UNESCAPED_UNICODE);
}catch (PDOException $ex){
    echo 'query failed:'. $ex->getMessage();
}


