<?php

namespace App\Model;

class ModelDelete extends modelDefault
{
    protected function getTableName()
    {
        return 'TBPRODUTOS';
    }

    function RestoreProducts()
    {
        $id = $this->id;

        return parent::restore($id);
    }
}