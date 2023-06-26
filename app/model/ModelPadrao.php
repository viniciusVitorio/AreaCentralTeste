<?php

namespace App\Model;

use App\Db\Connection;

abstract class ModelPadrao
{
    function Select()
    {
        $connection = Connection::get();

        $select = 'SELECT * FROM ' . $this->getTableName();

        $result = mysqli_query($connection, $select);

        $data = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

}

