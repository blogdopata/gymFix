<?php 

/* Se agrega lo del template para que me figure como plantilla  "contenido centrado y se cambia en la vista del admin de WP*/

/* a esto se le llama custom template ver el gráfico */ 


/* 
    * Template Name: Contenido Centrado (No Sidebars)

*/


get_header();

?>


<h1>No sidebars</h1>



    <main class="contenedor seccion contenido-centrado">
            <?php 

                while( have_posts() ) : the_post();

                    the_title('<h1 class="text-center text-primary">' , '</h1>');


                    if(has_post_thumbnail(false)){
                     /* si quisiera ageegarle clase  the_post_thumbnail('full',array('class' => 'imagen-destacada'));*/

                    the_post_thumbnail('full',array('class' => 'imagen-destacada'));
                
                    }

                    the_content();

                endwhile;

            ?>
    </main>    
</body>
</html>