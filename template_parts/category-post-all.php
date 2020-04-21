<?php 
    $categoria = get_the_category();
    $nomeCategoria = $categoria[0]->cat_name;
    // echo $categoria[0]->cat_name;
?>

<article class="col-md-12 item-category">
    <div class="row">
        <!-- Image -->
        <div class="col-md-6 item-category-image">
            <a href="<?php the_permalink(); ?>" class="image">
                <?php if( has_post_thumbnail( ) ) : ?>
                    <?php the_post_thumbnail('full', array('class' => 'post_thumb') ); ?>
                <?php endif; ?>
            </a>
        </div>
        <!-- end Image -->

        <!-- Info -->
        <div class="col-md-6 item-category-info">
            <ul>    
                <li>
                    <p class="link-category">
                        <a href="<?php the_permalink(); ?>">
                            <?= $nomeCategoria; ?>
                        </a>
                    </p>

                    <h2 class="title">
                        <a href="#"> <?php the_title(); ?> </a>
                    </h2>

                    <p class="resumo"><?php the_excerpt(); ?> </p>

                </li>
            </ul>
        </div>
        <!-- Info -->
    </div>
</article>
