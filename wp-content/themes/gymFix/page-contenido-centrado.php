<?php 

/* Se agrega lo del template para que me figure como plantilla  "contenido centrado y se cambia en la vista del admin de WP*/

/* a esto se le llama custom template ver el gráfico */ 


/* 
    * Template Name: Contenido Centrado (No Sidebars)

*/


get_header();

?>




    <main class="contenedor seccion contenido-centrado">
            <?php 
                get_template_part('template-parts/pagina')
                

            ?>
    </main>    


    <?php
            get_footer();
    ?>
