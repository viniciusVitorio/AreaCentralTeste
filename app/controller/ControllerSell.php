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

        public function processInsert()
    {
        $ModelSell = new ModelSell();

        $productId  = $_POST['produto'];
        $quantity   = $_POST['quantidade'];
        $valUni     = $_POST['valorUni'];
        $valTot     = $valUni * $quantity;

        $ModelSell->product  = $productId;
        $ModelSell->quantity = $quantity;
        $ModelSell->ValUni   = $valUni;
        $ModelSell->ValTot   = $valTot;

        $ModelSell->InsertProduct();

        header("Location: /venda");
    }

}