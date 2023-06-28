<?php

namespace App\Model;

class ModelSell extends ModelDefault
{
    protected function getTableName()
    {
        return 'TBVENDAS';
    }

    function ProcessSell()
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

    function UpdateProduct($quantity, $valTot, $SellDate, $productId)
    {
        return parent::UpdateProductAfterSell(
            $quantity,
            $valTot,
            $SellDate,
            $productId
        );
    }

    function updateProductValue($productId, $valUni)
    {
        return parent::UpdateValUni(
            $productId,
            $valUni
        );
    }


}