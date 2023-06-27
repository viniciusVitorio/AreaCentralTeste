<?php

namespace App\Model;

class ModelSell extends ModelDefault
{
    protected function getTableName()
    {
        return 'TBVENDAS';
    }

    function InsertProduct()
    {
        $productId = $this->product;
        $quantity  = $this->quantity;
        $valUni    = $this->ValUni;
        $valTot    = $this->ValTot;

        return parent::Insert([
            'PROID' => $productId,
            'VENQUANTIDADE' => $quantity,
            'VENVALOR' => $valUni,
            'VENVALORTOTAL' => $valTot
        ]);
    }

}