<?php

namespace App\Controller;

use App\Model\ModelSell;
use App\Model\ModelProducts;
use App\View\ViewHeader;
use App\View\ViewProductsSell;

class ControllerSell
{
    Public function render()
    {

        $modelProducts = new ModelProducts();
        $products = $modelProducts->Select();

        $productsSell = $modelProducts->SelectJoin();


        $title = 'Produtos Venda';

        $content = ViewHeader::getHTMLHeader($title);

        $content .= ViewProductsSell::getHTMLProductsSell($products, $productsSell);


        return $content;
    }

        public function processSell()
    {
        $ModelSell  = new ModelSell();
        $modelProducts = new ModelProducts();

        $productId  = $_POST['produto'];
        $quantity   = $_POST['quantidade'];
        $valUni     = $_POST['valorUni'];
        $valTot     = $valUni * $quantity;
        $SellDate   = date('d/m/y');
        $updateValUni = isset($_POST['atualizaValorUnitario']);

        if ($updateValUni) {
            $modelSell = new modelSell;

            $modelSell->updateProductValue($productId, $valUni);
        }

            $ModelSell->product = $productId;
            $ModelSell->quantity = $quantity;
            $ModelSell->ValUni = $valUni;
            $ModelSell->ValTot = $valTot;

            $ModelSell->ProcessSell();

            $UpdateProduct = new ModelSell();

            $UpdateProduct->UpdateProduct($quantity, $valTot, $SellDate, $productId);

            header("Location: /venda");
    }

}