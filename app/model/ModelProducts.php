<?php

namespace App\Model;

use App\Db\Connection;

class ModelProducts
{
    public function Select()
    {
        $connection = new Connection();
        $connection->setConexao();

        $select = "SELECT * FROM TBPRODUTO";

        $result = $connection->query($select, true); // Utiliza o método query() da classe de conexão

        $data = [];

        while ($Resultado = mysqli_fetch_assoc($result)) {
            $data[] = $Resultado;
        }

        $connection->closeConexao();

        return $data;
    }
}

