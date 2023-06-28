<?php

namespace App\Model;

use App\Db\Connection;

abstract class ModelDefault
{
    function Select()
    {
        $connection = Connection::get();

        $SQL = 'SELECT * FROM ' . $this->getTableName()  . ' WHERE PROEXCLUIDO = 0';

        $result = mysqli_query($connection, $SQL);

        $data = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    protected function Insert($values)
    {
        $connection = Connection::get();

        $columns = implode(',', array_keys($values));
        $preparedValues = array_map([$this, 'prepareValue'], array_values($values));
        $placeholders = implode(',', $preparedValues);

        $SQL = 'INSERT INTO ' . $this->getTableName() . ' (' . $columns . ') VALUES (' . $placeholders . ')';

        var_dump($SQL);

        return mysqli_query($connection, $SQL);
    }

    protected function delete($id)
    {
        $oConnection = Connection::get();

        $SQL = "UPDATE TBPRODUTOS 
                   SET PROEXCLUIDO = 1 
                 WHERE PROID = $id";

        return mysqli_query($oConnection, $SQL);
    }


    protected function prepareValue($value)
    {
        if (is_numeric($value)) {
            return $value;
        } elseif (is_string($value)) {
            return "'" . addslashes($value) . "'";
        } else {
            return strval($value);
        }
    }

    public function SelectEdit($id)
    {
        $connection = Connection::get();

        $id = mysqli_real_escape_string($connection, $id);
        $SQL = "SELECT * FROM " . $this->getTableName() . " WHERE PROID = '$id' AND PROEXCLUIDO = 0";

        $result = mysqli_query($connection, $SQL);


        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    protected function Update($values, $id)
    {
        $connection = Connection::get();

        $setValues = [];

        foreach ($values as $column => $value) {
            $column = mysqli_real_escape_string($connection, $column);
            $value = mysqli_real_escape_string($connection, $value);
            $setValues[] = "$column = '$value'";
        }

        $setValues = implode(',', $setValues);

        $id = mysqli_real_escape_string($connection, $id);

        $SQL = "UPDATE " . $this->getTableName() . " SET $setValues WHERE PROID = '$id'";

        $result = mysqli_query($connection, $SQL);


        return $result;
    }

    function SelectJoin()
    {
        $connection = Connection::get();

        $SQL = '         SELECT tbvendas.venid, 
                       tbprodutos.prodescricao, 
                        tbvendas.venquantidade, 
                             tbvendas.venvalor, 
                         tbvendas.venvalortotal 
                  FROM  TBVENDAS
                  JOIN ' . $this->getTableName()  . '
                    ON tbvendas.PROID = tbprodutos.PROID 
                 LIMIT 5;
        ';

        $result = mysqli_query($connection, $SQL);

        $data = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    protected function UpdateProductAfterSell($quantity, $valTot, $SellDate, $ProductId)
    {
        $connection = Connection::get();

        $SQL = "  UPDATE tbprodutos 
                   SET PRODATAVENDA = '$SellDate', 
                         PROESTOQUE = PROESTOQUE - $quantity, 
                        PROTOTVENDA = PROTOTVENDA + $valTot 
                        WHERE PROID = '$ProductId'";

        mysqli_query($connection, $SQL);
    }

    function GetCountProducts()
    {
        $connection = Connection::get();

        $SQL = "SELECT COUNT(*) FROM " . $this->getTableNameProd();

        $Result = mysqli_query($connection, $SQL);
        $row = mysqli_fetch_array($Result);

        return $row[0];
    }

    function GetCountSells()
    {
        $connection = Connection::get();

        $SQL = "SELECT COUNT(*) FROM " . $this->getTableNameSell();

        $Result = mysqli_query($connection, $SQL);
        $row = mysqli_fetch_array($Result);

        return $row[0];
    }

    function selectDeletes()
    {
        $connection = Connection::get();

        $SQL = "SELECT * FROM ". $this->getTableName() . " WHERE PROEXCLUIDO = 1";

        $result = mysqli_query($connection, $SQL);

        $data = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    function restore($id)
    {
        $Connection = Connection::get();

        $SQL = "UPDATE TBPRODUTOS 
                   SET PROEXCLUIDO = 0 
                 WHERE PROID = $id";

        return mysqli_query($Connection, $SQL);
    }

    function updateValUni($productId, $valUni)
    {
        $Connection = Connection::get();

        $SQL = "UPDATE TBPRODUTOS
                   SET PROVALORUNI = $valUni
                 WHERE PROID = $productId";

        return mysqli_query($Connection, $SQL);
    }
}
