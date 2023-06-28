<?php

namespace App\Model;

class ModelHome extends ModelDefault
{
    protected function getTableNameProd()
    {
        return 'TBPRODUTOS';
    }

    protected function getTableNameSell()
    {
        return 'TBVENDAS';
    }
}