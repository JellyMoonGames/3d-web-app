<?php

class Model
{
    public $dbHandle;

    public function __construct()
    {
        $dsn = 'sqlite:./db/test1.db';

        try
        {
            $this->dbHandle = new PDO($dsn, 'user', 'password', array
            (
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
        }
        catch(PDOEXception $e)
        {
            echo "I'm sorry Daniel, I'm afraid I can't connect to the database!";
            print new Exception($e->getMessage());
        }
    }

    public function dbCreateTable()
    {
        try
        {
            $this->dbHandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT,
            x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");

            return "Model_3D table is successfully created inside test.db file";
        }
        catch(PDOEXception $e)
        {
            print new Exception($e->getMessage());
        }

        $this->dbHandle = NULL;
    }

    public function dbInsertData()
    {
        try
        {
            $this->dbHandle->exec
            (
                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                    VALUES (1, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');" .
                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                    VALUES (2, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');" .
                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                    VALUES (3, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');"
            );

            return "X3D model data inserted successfully inside test1.db";
        }
        catch(PDOEXception $e)
        {
            print new Exception($e->getMessage());
        }

        $this->dbHandle = NULL;
    }

    public function dbGetData($table)
    {
        try
        {
            $sql = 'SELECT * FROM ' . $table;
            $statement = $this->dbHandle->query($sql);
            $result = null;
            $i = -0;

            while($data = $statement->fetch())
            {
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];

                $i++;
            }
        }
        catch(PDOEXception $e)
        {
            print new Exception($e->getMessage());
        }

        $this->dbHandle = NULL;
        return $result;
    }

    public function dbGetRow($table, $id, $field)
    {
        try
        {
            $sql = 'SELECT ' . $field . ' FROM ' . $table . ' WHERE id = ' . $id;
            $statement = $this->dbHandle->query($sql);
            $result = null;
            $i = -0;

            while($data = $statement->fetch())
            {
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];

                $i++;
            }
        }
        catch(PDOEXception $e)
        {
            print new Exception($e->getMessage());
        }

        $this->dbHandle = NULL;
        return $result;
    }
}

?>