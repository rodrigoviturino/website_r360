<!-- Post -->
    <!-- CARD -->
    <div class="col-md-6 post-objective__cards">
        <a href="<?php the_permalink(); ?>" class="image">
            <?php if( has_post_thumbnail( ) ) : ?>
                <?php the_post_thumbnail('medium', array('class' => 'post_thumb') ); ?>
            <?php endif; ?>
        </a>

        <div class="infos">
            <a href="#">
                <h3> <?php the_title(); ?> </h3>
                <?php the_content(); ?>
            </a>
        </div>

    </div>
    <!-- end CARD -->
<!-- end POST -->
