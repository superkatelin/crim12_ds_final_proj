<?php

require '../../app/environment.php';

$db = new PDO(DB_CONNECT, DB_USER, DB_PASSWORD);

$sql = 'SELECT s1.siteId, s1.clientId, s1.siteName, s1.siteDescription, s1.primaryContact, s1.capacity, s1.commercialDate, s1.addrLine1, s1.addrLine2, s1.addrCity, s1.addrState, s1.addrZip, s1.addrCountry FROM site AS s1 INNER JOIN client as c1 ON s1.clientId = c1.clientId WHERE c1.clientId = ?';

$statement = $db->prepare($sql);

$success = $statement->execute(
    array(
        $_GET['clientId']
    )
);

if (! $success) {
    header('HTTP/1.1 500 Error');
    var_dump($statement->errorInfo());
    exit('Bad SQL');
}

$arr = array();

while($row = $statement->fetch(PDO::FETCH_ASSOC)){
    $site = new site(
        $row['siteId'],
        $row['clientId'],
        $row['siteName'],
        $row['siteDescription'],
        $row['primaryContact'],
        $row['capacity'],
        $row['commercialDate'],
        $row['addrLine1'],
        $row['addrLine2'],
        $row['addrCity'],
        $row['addrState'],
        $row['addrZip'],
        $row['addrCountry']
    );
    array_push($arr, $site);
}

echo json_encode($arr);
