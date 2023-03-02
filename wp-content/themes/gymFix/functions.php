
<?php



function gymfitness_menus(){
    /* Se pueden agregar mas menus solo separar con  comas (,) */ 
    register_nav_menus( array(
        'menu_principal' => __('Menu Principal', 'gymfitness' )

    ) );

}

 
/* add_action:  agrega codigo
   add_filter: modifica la información
*/

/*  INIT se le conoce como un hook  ( este arranca el wp) */

add_action('init', 'gymfitness_menus');



/*----------------------------------------------------------*/


/*  Para agregar una hoja de EStilos */

function  gymfitness_scripts_styles(){

    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0' ) ;
    wp_enqueue_style('normalize','https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1' );
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');