<?php



function render($sPage)
{
    switch ($sPage) {
        case '/':
            return 'Produtos: 0 Vendas: 0';

        case '/produtos':
            return (new App\Controller\ControllerProducts())->render();
    }

    return 'Página não encontrada!';
}
