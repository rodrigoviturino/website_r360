        <!-- ASIDE  -->
                
        <aside class="col-md-4 post-objective__aside-home">
            <div class="post-objective__aside-home__block-title">
                <h2>Find your class</h2>
            </div>

            <section class="post-objective__aside-home-wrapper">

            <!-- Aqui precisa lista posts de tal categoria -->
                <!-- Item Post -->
            <?php if( have_posts() )  : while(have_posts() ) : the_post();  ?>
                <div class="posts">

                    <figure class="image">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <!-- <img src="assets/images/aside01.jpg" alt="Posts Image"> -->
                    </figure>

                    <div class="infos">
                        <h4 class="title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title_attribute(); ?>
                            </a>
                        </h4>
                        <p class="text"><?= get_the_date(); ?></p>
                    </div>

                </div>
            <?php endwhile; endif; ?>
                <!-- end Item Post -->

            </section>

            <section class="post-objective__aside-home-category">

                <div class="block-title">
                    <h2 class="title">Categories</h2>
                </div>

                <ul>
                <?php 
                    if(is_active_sidebar('r3_sidebar')) {
                        dynamic_sidebar('r3_sidebar');
                    }
                ?>
                </ul>
             

            </section>

        </aside>
        <!-- end ASIDE  -->