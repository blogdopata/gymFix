



<footer class='footer contenedor'>
    <hr>

    <div class="contenido-footer">
    <?php 

        /* con el themre_location indico que menu quiero renderizar en pantalla "*/
            $args = array(
                'theme_location' => 'menu_principal',
                'container' => 'nav',
                'container_class' => 'menu-principal'

            );  

            wp_nav_menu($args);


        ?>

            <p class="copyrigh"> Todos los Derechos Reservados.  <?php echo get_bloginfo('name') . "  " .   date('Y') ?></p>
        </div>
</footer>



</body>
</html>