<?php

$id = $_GET['id'];
$result = null;

try
{
    $dsn = 'sqlite:../db/main.db';
    $dbHandle = new PDO($dsn, 'user', 'password', array
    (
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ));

    $sql = 'SELECT * FROM Model_3D WHERE id = "' . $id . '"';
    $statement = $dbHandle->query($sql);

    $i = 0;
    while($data = $statement->fetch())
    {
        $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
        $result[$i]['modelTitle'] = $data['modelTitle'];
        $result[$i]['modelDescription'] = $data['modelDescription'];

        $i++;
    }
}
catch(PDOEXception $e)
{
    echo "Error retrieving information from the database about the model";
    print new Exception($e->getMessage());
}

$dbHandle = NULL;

echo json_encode($result);

?>