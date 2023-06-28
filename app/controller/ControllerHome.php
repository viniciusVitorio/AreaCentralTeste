<?php

namespace App\Controller;

use App\View\ViewHeader;
use App\View\ViewHome;
use App\Model\ModelHome;

class ControllerHome
{
    public function render()
    {
        $modelHome = new ModelHome();
        $ProductsCount = $modelHome->GetCountProducts();
        $ProductsSell  = $modelHome->GetCountSells();

        $title = 'Home';

        $content = ViewHeader::getHTMLHeader($title);

        $content .= ViewHome::getHTMLHome($ProductsCount, $ProductsSell);


        return $content;
    }
}