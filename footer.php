<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row footer__wrapper">

            <div class="col-md-3 col-sm-6 col-xs-12 footer__wrapper__about">
                
                <!-- Logo -->
                <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' );
                        // echo $image[0];
                    ?>
                    <a href="<?php bloginfo('url'); ?>" class="logo">
                        <img src="<?php echo $image[0]; ?>" alt="">
                    </a>
                <!-- end Logo -->

                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>

                <ul class="rede-social">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 footer__wrapper__links">
                <h3 class="title">Quick Links</h3>

                <ul class="group">
                    <li>
                        <a href="#">Placerat bibendum</a>
                    </li>
                    <li>
                        <a href="#">Aliquam porttitar vestibulum</a>
                    </li>
                    <li>
                        <a href="#">Lobortis enim nec nisi</a>
                    </li>
                    <li>
                        <a href="#">Aliquam porttitar vestibulum</a>
                    </li>
                    <li>
                        <a href="#">Bibendum Aliquam</a>
                    </li>
                    <li>
                        <a href="#">Placerat bibendum</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 footer__wrapper__newsletter">
                <h3 class="title">Newsletter</h3>

                <form action="#">
                    <label for="name">Temos Novidades!</label>
                    <input type="email" placeholder="Insira seu e-mail para receber">
                    <button type="submit">Enviar</button>
                </form>

            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 footer__wrapper__feed">
                <h3 class="title">Widgets Gallery</h3>
                <ul>
                    <li>
                        <a href="#">
                            <img src="assets/images/aside01.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/images/aside02.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/images/aside03.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/images/aside01.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/images/aside02.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/images/aside03.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <section class="footer__copyright">
        <div class="container">
            <div class="footer__copyright__wrapper">
                <p class="footer__copyright__wrapper-text">&copy; Todos os direitos reservados 2020 - Suchana</p>
                
                <ul class="footer__copyright__wrapper-menu">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Features</a>
                    </li>
                    <li>
                        <a href="#">Authors</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</footer>
<!-- end Footer -->

<?php wp_footer(); ?>
</body>
</html>