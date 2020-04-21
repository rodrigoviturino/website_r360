<?php 
    get_header();     

    $categoria = get_the_category();
    $nomeCategoria = $categoria[0]->cat_name;
    // global $post;
    // $categoria = get_the_category($post->id);
    // echo $categoria[0]->cat_name;

//     global $post;
// $categoria = get_the_category($post->id);
// $nomeCategoria = $categoria[0]->cat_name;
?>

<main class="category">

    <section class="category__main">
        <div class="container">

            <!-- Title Category -->
            <h2 class="title-category"> <?= $nomeCategoria; ?> </h2>
            <!-- end Title Category -->

            <section class="category__main__highlights">
                <div class="row">
                    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                        <?php get_template_part('template_parts/category-post'); ?>
                    <?php endwhile; endif; ?>                
                </div>
            </section>

        </div>
    </section>

</main>

<?php get_footer(); ?>