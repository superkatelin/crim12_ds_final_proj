<?php

require '../../app/environment.php';

$db = new PDO(DB_CONNECT, DB_USER, DB_PASSWORD);

$sql = 'SELECT * FROM turbine';

$statement = $db->prepare($sql);

$success = $statement->execute();

if (! $success) {
    header('HTTP/1.1 500 Error');
    var_dump($statement->errorInfo());
    exit('Bad SQL');
}

$arr = array();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
    $turbine = new turbine(
        $row['turbineId'],
        $row['turbineName'],
        $row['turbineDescription'],
        $row['capacity'],
        $row['rampUpTime'],
        $row['maintenanceInterval']
    );
    array_push($arr, $turbine);
}

echo json_encode($arr);
