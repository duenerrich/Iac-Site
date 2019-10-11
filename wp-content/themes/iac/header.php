<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Chamar as funções do header (css) -->
    <?php wp_head(); ?>
    <title>Instituto Agronomico de Campinas</title>
</head>

   <body>

<!-- DESIGN MENU -->
<div class="container">
             <div class="row header-gov">
                 <div class="col-5 bg-azul-gov">
                     <p class="agri-topo-titulo">Agricultura e Abastecimento<br></p>
                 </div>
                 <div class="col-7"><img id="logo-gov" src="/assets/img/logotipo-2019-govsp.jpg"></div>
             </div>
             <header>
               <!-- CHAMDA DE MENUS -->
               <?php wp_nav_menu(
  array('theme_location' => 'menu_header')
); ?>
                 <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="text-align:right;">
                             <form class="form-inline" target="_self" >
                                 <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"><a class="btn btn-light action-button" role="button" href="#" >Pesquisar </a></div>
                             </form>
                       </div>
                 </nav>
             </header>

<div class="container">
