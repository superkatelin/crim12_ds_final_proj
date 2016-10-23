<?php

require '../../app/environment.php';

$db = new PDO(DB_CONNECT, DB_USER, DB_PASSWORD);

$sql = 'SELECT * FROM client';

$statement = $db->prepare($sql);

$success = $statement->execute();

if (! $success) {
    header('HTTP/1.1 500 Error');
    var_dump($statement->errorInfo());
    exit('Bad SQL');
}

$arr = array();

while($row = $statement->fetch(PDO::FETCH_ASSOC)){
    $client = new client(
        $row['clientId'],
        $row['clientName'],
        $row['clientDescription'],
        $row['gicsSector'],
        $row['gicsSubIndustry'],
        $row['headquarters']
    );
    array_push($arr, $client);
}

echo json_encode($arr);
