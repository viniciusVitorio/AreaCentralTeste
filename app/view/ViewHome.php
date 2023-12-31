<?php

namespace App\View;

class ViewHome
{
    static function getHTMLHome($ProductsCount, $ProductsSell)
    {
        $html = "<div class='my-3 my-md-5'>
                    <div class='container'>
                        <div class='page-header'>
                          <h1 class='page-title'>
                            Home
                          </h1>
                        </div>
                        <div class='row row-cards'>
                          <div class='col-6 col-sm-4 col-lg-2'>
                            <div class='card'>
                              <div class='card-body p-3 text-center'>                    
                                <div class='h1 m-0'>". $ProductsCount ."</div>
                                <div class='text-muted mb-4'>Produtos</div>
                              </div>
                            </div>
                          </div>
                          <div class='col-6 col-sm-4 col-lg-2'>
                                <div class='card'>
                                  <div class='card-body p-3 text-center'>                    
                                    <div class='h1 m-0'>". $ProductsSell ."</div>
                                    <div class='text-muted mb-4'>Venda</div>
                                  </div>
                                </div>
                              </div>
                            </div>            
                          </div>
                        </div>
                    </div>
                 </div>";

            return $html;
    }
}