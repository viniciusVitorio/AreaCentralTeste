<?php

namespace App\View;

class ViewProductsAdd
{
    public static function getHTMLProductsAdd()
    {
        $html = '<form method="post" action="/produtos/adicionar">
                    <label for="descricao">Descrição:</label>
                    <input type="text" id="descricao" name="descricao">
                    
                    <label for="valor">Valor Unitário:</label>
                    <input type="text" id="valor" name="valor">
                    
                    <label for="estoque">Estoque:</label>
                    <input type="text" id="estoque" name="estoque">
                    
                    <input type="submit" value="Adicionar">
                </form>';

        return $html;
    }
}
