<!-- 
POR CONVENCIÓN SE CREA LA CARPETA "TEMPLATE-PARTS" y se PONE EL CODIGO QUE VAMOS A REPLICAR EN VARIOS LADOS
 -->


<?php 

    while( have_posts() ) : the_post();

        the_title('<h1 class="text-center text-primary">' , '</h1>');


        if(has_post_thumbnail(false)){
        /* si quisiera agregarle clase  the_post_thumbnail('full',array('class' => 'imagen-destacada'));*/

        the_post_thumbnail('full',array('class' => 'imagen-destacada'));

        }

        the_content();

    endwhile;

?>