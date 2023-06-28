<?php

namespace App\Controller;

use App\View\ViewHeader;
use App\View\ViewDeletes;
use App\Model\ModelDelete;

class ControllerDeletes
{
    public function render()
    {
        $modelDelete = new ModelDelete();
        $Products = $modelDelete->selectDeletes();

        $title = 'Excluidos';

        $content = ViewHeader::getHTMLHeader($title);

        $content .= ViewDeletes::getHTMLDeletes($Products);


        return $content;
    }

    public function processRestore()
    {
        $id =  $_GET['id'] ??= '';

        $ModelDelete = new ModelDelete();
        $ModelDelete->id = $id;

        $ModelDelete->RestoreProducts();

        header("Location: /excluidos");
    }
}