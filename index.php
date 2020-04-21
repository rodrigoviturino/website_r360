<?php get_header(); ?>
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
                        <?php if( have_posts() ) : while( have_posts() ) : the_post();   ?>
                            <?php get_template_part('template/post'); ?>
                        <?php endwhile; endif; ?>
                    </div>

                </div>

                <?php get_sidebar(); ?>

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
                        <?php if( have_posts() ) : while( have_posts() ) : the_post();   ?>
                            <?php get_template_part('template/post-cross-fit'); ?>
                        <?php endwhile; endif; ?>
                    </div>

                </div>

                <?php get_sidebar(); ?>

            </div>

        </div>
    </section>
<!-- end Posts -->

</main>

<?php get_footer(); ?>