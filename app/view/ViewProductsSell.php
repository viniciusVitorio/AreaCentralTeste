<?php

namespace App\View;

class ViewProductsSell
{
    public static function getHTMLProductsSell($products, $productsSell)
    {
            $html = "<div class='my-3 my-md-5'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <form class='card' method='POST' action='/venda/confirmar'>
                                <div class='card-body'>
                                    <h3 class='card-title'>Realizar venda de um produto</h3>
                                    <div class='row'>
                                        <div class='col-md-12'>
                                            <div class='form-group'>
                                                <label class='form-label'>Produto</label>
                                                <select class='form-control custom-select' name='produto'>";
                                                    foreach ($products as $product)
                                                    {
                                                    $html .="<option value='" . $product['PROID'] . "'>" . $product['PRODESCRICAO'] . "</option>";
                                                    }
                                                    $html .="
                                                </select>
                                            </div>
                                        </div>
                                        <div class='col-sm-6 col-md-4'>
                                            <div class='form-group'>
                                                <label class='form-label'>Quantidade</label>
                                                <input id='quantidade' name='quantidade' type='number' class='form-control' placeholder='Digite aqui a quantidade'>
                                            </div>
                                        </div>
                                        <div class='col-sm-6 col-md-4'>
                                            <div class='form-group'>
                                                <label class='form-label'>Valor unitário</label>
                                                <div class='input-group'>
                                                <span class='input-group-prepend'>
                                                  <span class='input-group-text'>R$</span>
                                                </span>
                                                    <input id='valorUnitario' name='valorUni' type='text' class='form-control text-right' aria-label='Valor'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-sm-6 col-md-4'>
                                            <div class='form-group'>
                                                <label class='form-label'>Valor total</label>
                                                <div class='input-group'>
                                                <span class='input-group-prepend'>
                                                  <span class='input-group-text'>R$</span>
                                                </span>
                                                    <input type='text' id='valorTotal' name='valorTot' class='form-control text-right' aria-label='Valor' disabled='disabled' title='Este campo não pode ser alterado'>
                                                    <input type='hidden' id='valorTotHidden' name='valorTotHidden'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-sm-6 col-md-12'>
                                            <div class='form-group'>
                                                <div class='form-label'>&nbsp;</div>
                                                <div class='custom-controls-stacked'>
                                                    <label class='custom-control custom-checkbox'>
                                                        <input type='checkbox' class='custom-control-input' name='atualizaValorUnitario' value='option1' checked>
                                                        <span class='custom-control-label'>Atualizar valor unitário do produto</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='card-footer text-left' style='display: flex; justify-content: space-between'>
                                    <div>
                                        <a href='./produtos' class='btn btn-secondary'>Voltar para produtos</a>
                                    </div>
                                    <div>
                                        <button type='submit' class='btn btn-primary'>Confirmar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class='my-3 my-md-5'>
          <div class='container'>
            <div class='row row-cards row-deck'>
              <div class='col-12'>
                <div class='card'>
                  <div class='card-header'>
                    <h3 class='card-title'>Últimas vendas realizadas</h3>		                        
                  </div>
                  <div class='table-responsive'>
                    <table class='table card-table table-vcenter text-nowrap'>
                      <thead>
                        <tr>
                          <th class='w-1'>#</th>
                          <th>Produto</th>
                          <th>Quantidade</th>
                          <th>Valor unitário</th>
                          <th>Valor total da venda</th>                          
                        </tr>
                      </thead>
                      <tbody>";
    foreach ($productsSell as $productSell) {
    $html .="    
                    <tr>
                      <td><span class='text-muted' ></span >". $productSell['venid'] ."</td >
                      <td>". $productSell['prodescricao'] ."</td >
                      <td>". $productSell['venquantidade'] ."</td >
                      <td>". $productSell['venvalor'] ."</td >
                      <td>". $productSell['venvalortotal'] ."</td >                          
                    </tr>";
        }
    $html .="
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