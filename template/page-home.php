<?php 
/**
 * Template Name: Page Home
 */
get_header();
?>

<main>

<!-- Banenr Home -->
<?php get_template_part('template_parts/banner', 'home'); ?>
<!-- end Banenr Home -->

<!-- Posts -->
    <section class="post-objective">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="post-objective__block-title">
                        <h2>What is your goal?</h2>
                    </div>

                    <div class="row">
                <?php 
                    $treino_peito_query = new WP_Query( array(
                    'post_type' => 'post',
                    ) );

                    if ( $treino_peito_query->have_posts() ) : while ( $treino_peito_query->have_posts() ) : $treino_peito_query->the_post() ?>

                    <div class="col-md-6 post-objective__cards">
                      <a href="<?php the_permalink(); ?>" class="image">
                            <?php if( has_post_thumbnail( ) ) : ?>
                                <?php the_post_thumbnail('full', array('class' => 'post_thumb') ); ?>
                            <?php endif; ?>
                        </a>

                        <div class="infos">
                            <a href="<?php the_permalink(); ?>">
                                <h3> <?php the_title(); ?> </h3>
                                <?php the_excerpt(); ?>
                            </a>
                        </div>
                    </div>
                <?php
                    endwhile;  endif; 
                    wp_reset_postdata(); 
                ?>


                        
                    </div>

                </div>

                <?php get_sidebar('home'); ?>

            </div>

        </div>
    </section>
<!-- end Posts -->

<!-- CTA Slide -->
<section class="cta-slide">
    <div class="container">

        <div class="cta-slide__block-title">
            <h2>
                Fresh and fun workouts
            </h2>
        </div>

        <div class="row">
            <?php get_template_part('template_parts/cta-slide-home'); ?>
        </div>

    </div>
</section>
<!-- end CTA Slide -->

<!-- Calcular IMC -->
<section class="imc">
    <div class="container">
        <div class="imc__form">

            <div class="block-title">
                <h2>Calcular IMC</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>      

            <?php get_template_part('template_parts/imc-form-home'); ?>

        </div>
    </div>
</section>
<!-- end Calcular IMC -->


<!-- Posts -->
<section class="post-objective">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="post-objective__block-title">
                        <h2>Cross Fit</h2>
                    </div>

                    <div class="row">
                <?php 
                    $crossfit_query = new WP_Query( array( 
                    'posts_per_page' => 6,
                    'category_name' => 'crossfit',
                    ) );

                    if ( $crossfit_query->have_posts() ) : while ( $crossfit_query->have_posts() ) : $crossfit_query->the_post() ?>

                    <div class="col-md-6 post-objective__cards">
                      <a href="<?php the_permalink(); ?>" class="image">
                            <?php if( has_post_thumbnail( ) ) : ?>
                                <?php the_post_thumbnail('medium', array('class' => 'post_thumb') ); ?>
                            <?php endif; ?>
                        </a>

                        <div class="infos">
                            <a href="<?php the_permalink(); ?>">
                                <h3> <?php the_title(); ?> </h3>
                                <?php the_excerpt(); ?>
                            </a>
                        </div>
                    </div>
                <?php
                    endwhile;  endif; 
                    wp_reset_postdata(); 
                ?>
                    </div>

                </div>

            </div>

        </div>
    </section>
<!-- end Posts -->

</main>


<?php get_footer(); ?>