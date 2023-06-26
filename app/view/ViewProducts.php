<?php

namespace App\View;

class ViewProducts
{
    public static function getHTMLProducts($products)
    {
        $html = "
        <div class='my-3 my-md-5'>
            <div class='container'>
                <div class='row row-cards row-deck'>
                    <div class='col-12'>
                        <div class='card'>
                            <div class='card-header'>
                                <h3 class='card-title'>Produtos</h3>
                                <div class='card-options'>
                                    <a href='./produtos/adicionar' class='btn btn-azure'>Adicionar</a>
                                </div>
                            </div>
                            <div class='table-responsive'>
                                <table class='table card-table table-vcenter text-nowrap'>
                                    <thead>
                                        <tr>
                                            <th class='w-1'>#</th>
                                            <th>Descrição</th>
                                            <th>Valor unitário</th>
                                            <th>Estoque</th>
                                            <th>Data última venda</th>
                                            <th>Total de vendas</th>
                                            <th class='w-1'></th>
                                            <th class='w-1'></th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                                        foreach ($products as $product) {
            $html .= "
                                        <tr>
                                            <td><span class='text-muted'>" . $product['PROID'] . "</span></td>
                                            <td>" . $product['PRODESCRICAO'] . "</td>
                                            <td>" . $product['PROVALORUNI'] . "</td>
                                            <td>" . $product['PROESTOQUE'] . "</td>
                                            <td>" . $product['PRODATAVENDA'] . "</td>
                                            <td>" . $product['PROTOTVENDA'] . "</td>
                                            <td>
                                                <a class='icon' href='./form-produto-edit.html'>
                                                    <i class='fe fe-edit'></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a class='icon' href='javascript:void(0)'>
                                                    <i class='fe fe-trash'></i>
                                                </a>
                                            </td>
                                        </tr>";
                                        }
        $html .= "
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";

        return $html;
    }
}
