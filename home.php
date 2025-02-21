<?php get_header() ?>

    <div class="container-fluid custom-container">
    
        <!--DIV HOMEPAGE HEADER-->

        <div class="row">
            <div class="title_homepage_header">
                <h2 class="mb-4 spacing">Today's picks</h2>
                <img src="/wp-content/themes/NRB/img/culture.png" alt="">
            </div>
            <div class="info_homepage_header">
                <button type="button" class="btn btn-outline-primary boton rounded-pill m-3 btn-img">
                    <a class="btn-img text-decoration-none" href="noticies.html">Notícies</a>
                </button>
            </div>
            <div class="info_homepage_header ms-2">
                <p class="m-1 grey">Stephen Leonardi | Software Engineer | 5 min read</p>
                <p class="m-1 grey">September 8 ,2022</p>
            </div>
            <div class="info_homepage_header ms-2 mb-5 pb-3">
                <h3 class="mt-4 anima">Anima Introduces: Hotspots Hints</h3>
                <p class="grey2 col-9">Hotspot Hints Help Guide Users Navigate Through a Prototype, Anima allows designers to create prototypes</p>
                <a class="learn_more text-decoration-none" href="https://www.animaapp.com/" target="_blank"> Learn More </a>
            </div>
        </div>
    <!--DIV Header-->
    <section>
        <div class="row">
            <?php
            if (have_posts()) {
                global $wp_query;

                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __( 'Anterior', 'textdomain' ),
                    'next_text' => __( 'Siguiente', 'textdomain' ),
                ));

                while (have_posts()) {
                    the_post();
             ?>

                    <div class="col-lg-6 mb-5">
                        <picture class="thumbnail">
                         <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium', array('class' => 'rounded w-100'));
                            } else {
                                _e('Sense imatge en el post');
                            }
                            ?>
                        </picture>
                        <a class="new-title" href="<?php the_permalink(); ?>">
                            <p><?php echo the_title(); ?></p>
                        </a>
                        <p class="subtitle mb-sm-2">
                            <? the_excerpt(); ?>
                        </p>
                    </div>

            <?php
                }

                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __( 'Anterior', 'textdomain' ),
                    'next_text' => __( 'Siguiente', 'textdomain' ),
                ));
            } else {
                _e('No hi ha posts disponibles');
            }
            ?>
        </div>
        <div class="row">
            <div class="container-fluid padding-btn border-bottom border-3">
                <button type="button" class="btn boton m-3 btn-grande padding-btn-in">SHOW MORE</button>
            </div>
        </div>
    </section>
<?php get_footer() ?>