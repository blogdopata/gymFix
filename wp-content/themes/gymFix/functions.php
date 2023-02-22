

<?php

function gymfitness_menus(){
    /* Se pueen agregar mas menus solo separar con  comas (,) */ 
    register_nav_menus( array(
        'menu_principal' => __('Menu Principal Gaaa', 'gymfitness' )

    ) );

}
 
/* add_action:  agrega codigo
   add_filter: modifica la información
*/

/*  INIT se le conoce como un hook  ( este arranca el wp) */

add_action('init', 'gymfitness_menus');



