<?php



function render($sPage)
{
    switch ($sPage) {
        case '/':
            return(new App\Controller\ControllerHome())->render();

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
            return (new App\Controller\ControllerSell())->processSell();

        case '/excluidos':
            return (new App\Controller\ControllerDeletes())->render();

        case '/Restaurar':
            return (new App\Controller\ControllerDeletes())->processRestore();
    }

    return 'Página não encontrada!';
}
