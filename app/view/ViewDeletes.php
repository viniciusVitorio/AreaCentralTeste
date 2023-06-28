<?php

namespace App\View;

class ViewDeletes
{
    static function getHTMLDeletes($Products)
    {
        $html = "<div class='my-3 my-md-5'>
                    <div class='container'>
                      <div class='row row-cards row-deck'>
                        <div class='col-12'>
                          <div class='card'>
                            <div class='card-header'>
                              <h3 class='card-title'>Produtos excluídos</h3>		      
                            </div>
                            <div class='table-responsive'>
                              <table class='table card-table table-vcenter text-nowrap'>
                                <thead>
                                  <tr>
                                    <th class='w-1'>#</th>
                                    <th>Descrição</th>
                                    <th>Valor unitário</th>
                                    <th>Estoque</th>                                                    
                                    <th class='w-1'></th>                          
                                  </tr>
                                </thead>
                                <tbody>";
            foreach ($Products as $product) {
            $html .= "    
                                  <tr>
                                    <td><span class='text-muted' >". $product['PROID'] ."</span ></td >
                                    <td>". $product['PRODESCRICAO'] ."</td >
                                    <td>". $product['PROVALORUNI'] ."</td >                            
                                    <td>". $product['PROESTOQUE'] ."</td >                      
                                    <td><a class='icon' href ='/Restaurar?id=". $product['PROID'] ."'' ><i class='fe fe-refresh-ccw' ></i ></a ></td>                          
                                  </tr>";
            }
        $html .= "               </tbody>
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