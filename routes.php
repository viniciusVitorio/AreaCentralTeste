<?php



function render($sPage)
{
    switch ($sPage) {
        case '/':
            return 'Produtos: 0 Vendas: 0';

        case '/produtos':
            return (new App\Controller\ControllerProducts())->render();

        case '/produtos/adicionar':
            return (new App\Controller\ControllerProductsAdd())->render();
    }

    return 'Página não encontrada!';
}
