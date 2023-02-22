


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

<header class="header">
    <div class="contenedor barra-navegacion">
        <div class="logo">
               <!-- get_template_directory_uri()  FUNCION QUE MUESTRA LA RUTA DEL  TEMPLATE  -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">

        </div>

        <?php 
            $args = array(
                'theme_location' => 'menu-principal'

            );
            wp_nav_menu();


        ?>

    </div>


</header>

<main>
<?php 

    while( have_posts() ) : the_post();

        the_title();

        the_content();

    endwhile;


?></main>    
</body>
</html>