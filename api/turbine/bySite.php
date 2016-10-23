<?php

require '../../app/environment.php';

$db = new PDO(DB_CONNECT, DB_USER, DB_PASSWORD);

$sql = 'SELECT t1.turbineId, t1.turbineName, t1.turbineDescription, t1.capacity, t1.rampUpTime, t1.maintenanceInterval, t2.serialNumber FROM turbine as t1 inner join turbineDeployed as t2 on t1.turbineId = t2.turbineId inner join site s on t2.siteId = s.siteId where s.siteId=?';

$statement = $db->prepare($sql);

$success = $statement->execute(
    array(
        $_GET['siteId']
    )
);

if (! $success) {
    header('HTTP/1.1 500 Error');
    var_dump($statement->errorInfo());
    exit('Bad SQL');
}

$arr = array();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
    $turbine = new turbineSerial(
        $row['turbineId'],
        $row['turbineName'],
        $row['turbineDescription'],
        $row['capacity'],
        $row['rampUpTime'],
        $row['maintenanceInterval'],
        $row['serialNumber']
    );
    array_push($arr, $turbine);
}

echo json_encode($arr);
