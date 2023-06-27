<?php

namespace App\Model;

class ModelProducts extends ModelDefault
{

    protected function getTableName()
    {
        return 'TBPRODUTOS';
    }

    function InsertProduct()
    {
        $descricao = $this->descricao;
        $estoque = $this->estoque;
        $valorUnid = $this->ValorUni;

        return parent::Insert([
            'PRODESCRICAO' => $descricao,
            'PROESTOQUE' => $estoque,
            'PROVALORUNI' => $valorUnid
        ]);
    }

    function DeleteProduct()
    {
        $id = $this->id;

        return parent::delete($id);
    }

    function EditProduct()
    {
        $id        = $this->id;
        $descricao = $this->descricao;
        $estoque   = $this->estoque;
        $valorUnid = $this->ValorUni;

        return parent::Update([
            'PRODESCRICAO' => $descricao,
            'PROESTOQUE' => $estoque,
            'PROVALORUNI' => $valorUnid
        ], $id);
    }

}