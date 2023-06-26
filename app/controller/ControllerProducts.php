<?php

namespace App\Controller;

use App\Model\ModelProducts;
use App\View\ViewProducts,
    App\View\ViewHeader;

class ControllerProducts
{
    public function render()
    {
        $modelProducts = new ModelProducts;
        $products = $modelProducts->Select();

        $title = 'Produtos';

        $content = ViewHeader::getHTMLHeader($title);

        $content .= ViewProducts::getHTMLProducts($products);

        //MainHTML
        $content .= ViewProducts::getHTMLProducts($products);

        return $content;
    }
}
