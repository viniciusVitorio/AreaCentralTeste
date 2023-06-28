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

        $description = $_POST['descricao'];
        $stock       = $_POST['estoque'];
        $valUni      = $_POST['valorUni'];


        $ModelProducts->description = $description;
        $ModelProducts->stock = $stock;
        $ModelProducts->valUni = $valUni;

        $ModelProducts->InsertProduct();

        $_SESSION['success_message'] = 'Produto inserido com sucesso';

        header("Location: /produtos");
    }

    public function processDelete()
    {
        $id =  $_GET['id'] ??= '';

        $ModelProduct = new ModelProducts();
        $ModelProduct->id = $id;

        $ModelProduct->DeleteProduct();

        $_SESSION['success_message'] = 'Produto excluído com sucesso';

        header("Location: /produtos");
    }

    public function processEdit()
    {
        $ModelProducts = new ModelProducts();

        $id = $_GET['id'] ??= '';

        $description = $_POST['descricao'];
        $stock = $_POST['estoque'];
        $valUni = $_POST['valorUni'];

        $ModelProducts->id        = $id;
        $ModelProducts->description = $description;
        $ModelProducts->stock   = $stock;
        $ModelProducts->valUni  = $valUni;

        $ModelProducts->EditProduct();

        header("Location: /produtos");
    }

}
