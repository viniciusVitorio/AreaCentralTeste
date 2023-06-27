<?php



function render($sPage)
{
    switch ($sPage) {
        case '/':
            return 'Produtos: 0 Vendas: 0';

        case '/produtos':
            return (new App\Controller\ControllerProducts())->render();

        case '/adicionar':
            return (new App\Controller\ControllerProductsAdd())->render();

        case '/produtos/adicionar':
            return (new App\Controller\ControllerProducts())->processInsert();

        case '/produtos/excluir':
            return (new App\Controller\ControllerProducts())->processDelete();

        case '/editar':
            return (new App\Controller\ControllerProductsEdit())->render();

        case '/produtos/editar':
            return (new App\Controller\ControllerProducts())->processEdit();

        case '/venda':
            return (new App\Controller\ControllerSell())->render();

        case '/venda/confirmar':
            return (new App\Controller\ControllerSell())->processInsert();
    }

    return 'Página não encontrada!';
}
