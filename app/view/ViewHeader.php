<?php

namespace App\View;

class ViewHeader
{
    public static function getHTMLHeader($title)
    {
        $html = "
            <!doctype html>
            <html lang='pt-br' dir='ltr'>
            
            <head>
              <meta charset='UTF-8'>
              <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
              <meta http-equiv='X-UA-Compatible' content='ie=edge'>
              <meta http-equiv='Content-Language' content='pt-br' />
              <meta name='msapplication-TileColor' content='#2d89ef'>
              <meta name='theme-color' content='#4188c9'>
              <meta name='apple-mobile-web-app-status-bar-style' content='black-translucent' />
              <meta name='apple-mobile-web-app-capable' content='yes'>
              <meta name='mobile-web-app-capable' content='yes'>
              <meta name='HandheldFriendly' content='True'>
              <meta name='MobileOptimized' content='320'>
              <link rel='icon' href='./favicon.ico' type='image/x-icon' />
              <link rel='shortcut icon' type='image/x-icon' href='./favicon.ico' />
              <!-- Generated: 2018-04-16 09:29:05 +0200 -->
              <link href='app/view/assets/css/dashboard.css' rel='stylesheet' />
              <title>Area Central -  $title</title>
              <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
              <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext'>
              <script src='app/view/assets/js/require.min.js'></script>
              <script src='app/view/assets/js/calculateTotalValue.js'></script>
              <link href='/app/view/assets/css/dashboard.css' rel='stylesheet' />
              <script>
                requirejs.config({
                  baseUrl: '.'
                });
              </script>
              <!-- Dashboard Core -->
              
              <script src='app/view/assets/js/dashboard.js'></script>
              <!-- c3.js Charts Plugin -->
              <link href='app/view/assets/plugins/charts-c3/plugin.css' rel='stylesheet' />
              <script src='app/view/assets/plugins/charts-c3/plugin.js'></script>
              <!-- Google Maps Plugin -->
              <link href='app/view/assets/plugins/maps-google/plugin.css' rel='stylesheet' />
              <script src='app/view/assets/plugins/maps-google/plugin.js'></script>
              <!-- Input Mask Plugin -->
              <script src='app/view/assets/plugins/input-mask/plugin.js'></script>
              <script type='text/javascript' charset='utf-8' async='' data-requirecontext='_'
                data-requiremodule='bootstrap' src='app/view/assets/js/vendors/bootstrap.bundle.min.js'></script>
            </head>
            
            <body class=''>
              <div class='page'>
                <div class='page-main'>
                  <div class='header py-4'>
                    <div class='container'>
                      <div class='d-flex'>
                        <a class='header-brand' href='./index.html'>
                          <img src='app/view/assets/demo/brand/tabler.svg' class='header-brand-img' alt='tabler logo'>
                        </a>
                        <div class='d-flex order-lg-2 ml-auto'>
                          <div>
                            <a href='#' class='nav-link pr-0 leading-none' data-toggle='dropdown'>
                              <span class='avatar' style='background-image: url(app/view/assets/demo/faces/male/44.jpg)'></span>
                              <span class='ml-2 d-none d-lg-block'>
                                <span class='text-default'>Vinicius Vitório</span>
                                <small class='text-muted d-block mt-1'>Administrator</small>
                              </span>
                            </a>
                          </div>
                        </div>
                        <a href='#' class='header-toggler d-lg-none ml-3 ml-lg-0' data-toggle='collapse' data-target='#headerMenuCollapse'>
                          <span class='header-toggler-icon'></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class='header collapse d-lg-flex p-0' id='headerMenuCollapse'>
                    <div class='container'>
                      <div class='row align-items-center'>
                        <div class='col-lg-3 ml-auto'>
                          <form class='input-icon my-3 my-lg-0'>
                            <input type='search' class='form-control header-search' placeholder='Search&hellip;' tabindex='1'>
                            <div class='input-icon-addon'>
                              <i class='fe fe-search'></i>
                            </div>
                          </form>
                        </div>
                        <div class='col-lg order-lg-first'>
                          <ul class='nav nav-tabs border-0 flex-column flex-lg-row'>
                            <li class='nav-item'>
                              <a href='home' class='nav-link'><i class='fe fe-home'></i> Home</a>
                            </li>
                            <li class='nav-item'>
                              <a href='/produtos' class='nav-link active'><i class='fe fe-package'></i> Produtos</a>
                            </li>
                            <li class='nav-item'>
                              <a href='/venda' class='nav-link'><i class='fe fe-dollar-sign'></i> Venda</a>
                            </li>
                            <li class='nav-item'>
                              <a href='/excluidos' class='nav-link'><i class='fe fe-trash'></i> Lixeira</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>";

        return $html;
    }
}