<?php

require '../../app/environment.php';

$db = new PDO(DB_CONNECT, DB_USER, DB_PASSWORD);

$sql = 'SELECT clientId, name, note FROM slaNote WHERE clientId=?';

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
    $slaNote = new slaNote(
        $row['clientId'],
        $row['name'],
        $row['note']
    );
    array_push($arr, $slaNote);
}

echo json_encode($arr);
