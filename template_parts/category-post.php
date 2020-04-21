<?php 
    $categoria = get_the_category();
    $nomeCategoria = $categoria[0]->cat_name;
    // echo $categoria[0]->cat_name;
?>
<div class="col-xs-12 col-lg-4 single-category">
    <article class="single-category-wrapper">
        <!-- Image -->
        <div class="single-category-wrapper-image">
            <a href="<?php the_permalink(); ?>" class="image">
                <?php if( has_post_thumbnail( ) ) : ?>
                    <?php the_post_thumbnail('full', array('class' => 'post_thumb') ); ?>
                <?php endif; ?>
            </a>
        </div>
        <!-- end Image -->

        <!-- Info -->
        <div class="single-category-wrapper-info">
            <span><?= $nomeCategoria; ?></span>
            <h3> 
                <a href="<?php the_permalink(); ?>">
                    <?php the_excerpt(); ?>
                </a>
            </h3>
        </div>
        <!-- Info -->

    </article>

</div>



