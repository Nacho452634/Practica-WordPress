<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/crown_icon_245698.ico" type="image/x-icon">
    <title>Home</title>
    <?php wp_head() ?>

</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
            <!--DIV de Nav var-->
            <nav class="navbar navbar-expand-md navbar-dark navegacion p-3">
                <div class="container-fluid grid gap-5">
                    <a class="navbar-brand navegacion " href="index.php">Blogful</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'primary',
                            'theme_location' => 'primary',
                            'container' => 'ul',
                            'menu_class' => 'align-items-center justify-content-evenly w-100 navbar-nav m-auto mb-2 mb-lg-0',
                            'add_li_class' => 'nav-item m-1',
                            'link_class' => 'nav-link text-decoration-none nav-item',
                        ));
                        ?>
                        <a href="/"><i class="bi bi-search"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>