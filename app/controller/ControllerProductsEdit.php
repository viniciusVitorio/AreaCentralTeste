<?php

namespace App\Controller;

use App\Model\ModelProducts;
use App\View\ViewHeader;
use App\View\ViewProductsEdit;

class ControllerProductsEdit
{
    public function render()
    {
        $id = $_GET['id'] ?? '';

        $modelProducts = new ModelProducts();

        $products = $modelProducts->SelectEdit($id);

        $title = 'Produtos Editar';

        $content = ViewHeader::getHTMLHeader($title);

        $content .= ViewProductsEdit::getHTMLProductsEdit($products, $id);

        return $content;
    }
}
