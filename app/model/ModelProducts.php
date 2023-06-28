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
        $descricao = $this->description;
        $estoque = $this->stock;
        $valorUnid = $this->valUni;

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
        $descricao = $this->description;
        $estoque   = $this->stock;
        $valorUnid = $this->valUni;

        return parent::Update([
            'PRODESCRICAO' => $descricao,
            'PROESTOQUE' => $estoque,
            'PROVALORUNI' => $valorUnid
        ], $id);
    }

}