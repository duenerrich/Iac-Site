<?php
function load_scripts (){
   # BOOTSTRAP PADRAO #
   wp_enqueue_style('bootstrap_css','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' ,array(), '4.3.1', 'all');


   #BOOTSTRAP STUDIO IO#
   wp_enqueue_style('article',get_template_directory_uri().'/assets/css/Article-List.css', false,'1,1' ,'all');
   wp_enqueue_style('features',get_template_directory_uri().'/assets/css/Features-Boxed.css' , false, '1,1' ,'all');
   wp_enqueue_style('footer',get_template_directory_uri().'/assets/css/Footer-Dark.css' , false, '1,1' ,'all');
   wp_enqueue_style('navigation',get_template_directory_uri().'/assets/css/Navigation-with-Search.css' , false,'1.1', 'all');
   wp_enqueue_style('fonts',get_template_directory_uri().'/assets/fonts/font-awesome.min.css' , false, '5,2,3' ,'all');

   # MEU CSS #
   wp_enqueue_style('my_css', get_template_directory_uri().'/assets/css/style.css', false, '1,0', 'all');

wp_enqueue_script('boostrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.31', true);
wp_enqueue_script('my_js', get_template_directory_uri().'/js/jquery.min.js', false, '1.1', true);


}
// Gancho de enfileramento de css e scripts
add_action('wp_enqueue_scripts', 'load_scripts');


function menu_config (){
// Registrando os menus
register_nav_menus(
array (
   'menu_header' => 'Menu Topo',
   'menu_footer1' => 'Menu Rodape 1 IAC',
   'menu_footer2' => 'Menu Rodape 2 IAC',
   'menu_footer3' => 'Menu Rodape 3 IAC'
   )
);

// Array de css
$css = array (
  'height' => 150,
  'width' => 1920
);

//Adiciona um cabeçalho customizado ao tema
add_theme_support('custom-header', $css);
// Adiciona minuaturas para os post
add_theme_support('post-thumbnails');
}

// Gancho chamado after.. que ira executar nossa funcao apos o tema ser carregado
add_action ('after_setup_theme', 'menu_config', 0);
