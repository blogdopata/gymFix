



<footer class='footer contenedor'>
    <hr>

    <?php 

    /* con el themre_location indico que menu quiero renderizar en pantalla "*/
        $args = array(
            'theme_location' => 'menu_principal',
            'container' => 'nav',
            'container_class' => 'menu-principal'

        );  

        wp_nav_menu($args);


?>


</footer>

</body>
</html>