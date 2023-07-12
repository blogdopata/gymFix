<?php 
/*
 * Template Name: Listado de Clases   
*/

get_header();

?>


<!-- get_template_part es  la forma corecta para traer unuestra plantilla -->

    <main class="contenedor seccion ">
          <h1>Listado de Clases</h1>
          <ul class="listado-grid">
                <?php 
                    $args = array(

                         'post_type'  =>'gymfitness_clases'

                        
                    );
                    $clases = new WP_Query($args);

                    while($clases-> have_posts()) {
                        $clases -> the_post();
                  


                ?>
                    <li class="card">
                        <?php the_title() ; ?>

                    </li>

                  <?php
                 }
                  wp_reset_postdata();
                  ?>


          </ul>
    </main>    



   

    <?php
            get_footer();
    ?>
