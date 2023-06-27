<?php

namespace App\Controller;

use App\View\ViewProducts,
    App\Model\ModelProducts,
    App\View\ViewHeader;
use App\View\ViewProductsEdit;

class ControllerProducts
{
    public function render()
    {
        $modelProducts = new ModelProducts();
        $products = $modelProducts->Select();

        $title = 'Produtos';

        $content = ViewHeader::getHTMLHeader($title);

        $content .= ViewProducts::getHTMLProducts($products);


        return $content;
    }

    public function processInsert()
    {
        $ModelProducts = new ModelProducts();

        $descricao = $_POST['descricao'];
        $estoque = $_POST['estoque'];
        $valorUnid = $_POST['valorUni'];

        $ModelProducts->descricao = $descricao;
        $ModelProducts->estoque = $estoque;
        $ModelProducts->ValorUni = $valorUnid;

        $ModelProducts->InsertProduct();

        header("Location: /produtos");
    }

    public function processDelete()
    {
        $id =  $_GET['id'] ??= '';

        $ModelProduct = new ModelProducts();
        $ModelProduct->id = $id;

        $ModelProduct->DeleteProduct();

        header("Location: /produtos");
    }

    public function processEdit()
    {
        $ModelProducts = new ModelProducts();

        $id = $_GET['id'] ??= '';

        $descricao = $_POST['descricao'];
        $estoque = $_POST['estoque'];
        $valorUnid = $_POST['valorUni'];

        $ModelProducts->id        = $id;
        $ModelProducts->descricao = $descricao;
        $ModelProducts->estoque   = $estoque;
        $ModelProducts->ValorUni  = $valorUnid;

        $ModelProducts->EditProduct();

        header("Location: /produtos");
    }

}
