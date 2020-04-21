<?php get_header(); ?>

<main class="singlePost">

<!-- Banenr Home -->
    <?php get_template_part('template_parts/banner', 'single-post'); ?>
<!-- end Banenr Home -->
<section class="singlePost__main">
    <div class="container">
        <div class="row">

            <section class="col-md-8">

                <article class="singlePost__main__article">
                    <div class="row">

                        <!-- Rede Social Sidebar -->
                        <div class="col-md-1 brager">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <p>Acompanhe</p>
                                </li>
                            </ul>
                        </div>
                        <!-- Rede Social Sidebar -->

                        <div class="col-md-11">
                            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; endif; ?>

                            <span class="divisor"></span>

                            <!-- Posts Relacionados -->
                            <section class="singlePost__main__article__related">                                
                                <div class="row">

                                    <div class="col-md-6 previous-post">

                                        <p class="previous-post-pages"> 
                                            <i class="fas fa-arrow-left"></i> 
                                            <?php previous_post_link(); ?>
                                        </p>
                                        
                                        <ul class="previous-post-group">

                                            <li>
                                                <a href="#">
                                                    <div id="cooler-nav" class="navigation">
                                                        <?php $prevPost = get_previous_post(true);
                                                            if($prevPost) { ?>
                                                                <div class="nav-box previous">
                                                                    <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );?>
                                                                    <?php previous_post_link('%link',"$prevthumbnail ", TRUE); ?>
                                                                </div>
                                                            
                                                            <?php } ?>
                                                    
                                                    </div><!--#cooler-nav div -->
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <h3>The Argument For Short Meditations</h3>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="next-post col-md-6">
                                        <div class="next-post">
                                            <p class="next-post-pages">
                                            <?php next_post_link(); ?>
                                                <i class="fas fa-arrow-right"></i>
                                            </p>
                                            <ul class="next-post-group">

                                                <li>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <h3>The Argument For Short Meditations</h3>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <div id="cooler-nav" class="navigation">
                                                            <?php 

                                                            if( $next_post = get_next_post() ): 
                                                                echo'<span class="single-post-nav next-post-link">';
                                                                $nextpost = get_the_post_thumbnail( $next_post->ID, 'medium', array('class' => 'pagination-next')); 
                                                                next_post_link( '%link',"$nextpost  <p>Next Post in Category</p>", TRUE ); 
                                                                echo'</span>';
                                                            endif; 

                                                            ?>
                                                        </div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </section>
                            <!-- end Posts Relacionados -->

                            <div class="divisor"></div>

                            <!-- Comments -->
                            <!-- <section class="singlePost__main__article__comments">
                                <h3>Leave a reply</h3>

                                <form action="#" class="form">
                                    <p>Your email address will not be published. Required fields are marked *</p>

                                    <div class="form-group">
                                        <label for="comentario">Comentário</label>
                                        <textarea cols="45" rows="8"></textarea>
                                    </div>

                                    
                                    <div class="row form-info">

                                        <div class="col-md-6">
                                            <label for="nome">Nome *</label>
                                            <input type="text" name="nome">
                                        </div>

                                        <div class="col-md-6 ">
                                            <label for="email">Email *</label>
                                            <input type="email" name="email">
                                        </div>

                                        <div class="col-md-12 checkbox-save">
                                            <input type="checkbox" class="save">
                                            <label for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </div>

                                    </div>

                                    <button type="submit" class="form-btn">Enviar Comentário</button>

                                </form>

                            </section> -->
                            <!-- end Comments -->

                        </div>
                    
                    </div> <!-- end Row -->
                </article>

            </section>

            <?php get_sidebar('single'); ?>
           
            <?php comments_number('0', '1', '%'); ?>
        </div>
    </div>
</section>


</main>

<?php get_footer(); ?>