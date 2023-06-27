<?php

namespace App\Controller;

use App\Model\ModelProducts;
use App\View\ViewHeader;
use App\View\ViewProductsAdd;

class ControllerProductsAdd
{
    public function render()
    {

        $title = 'Produtos Adicionar';

        $content = ViewHeader::getHTMLHeader($title);

        $content .= ViewProductsAdd::getHTMLProductsAdd();

        return $content;
    }
}
