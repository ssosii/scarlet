<footer id="footer">
    <img class="shape" src="<?php bloginfo('template_url'); ?>/assets/img/upper.png" />
    <div class="container footer__container">

        <div class="element">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" />
            <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis facilis voluptatem ad
                repellendus
                praesentium molestias, vero, officiis quo fuga ipsam temporibus. </p>
            <div class="social">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/fb_white.svg" />
                <img src="<?php bloginfo('template_url'); ?>/assets/img/music.svg" />
                <img src="<?php bloginfo('template_url'); ?>/assets/img/mail.svg" />
            </div>
        </div>
        <div class="element">
            <span>Mapa strony</span>
            <ul style="margin-bottom: 5vh">
                <li>O Nas</li>
                <li>Oferta</li>
                <li>Realizacje</li>
                <li>Grafika</li>
                <li>Strony www</li>

            </ul>

            <span>Info</span>
            <ul>
                <li>FAQ</li>
                <li>Centrum Wiedzy</li>
                <li>RODO</li>
            </ul>
        </div>



        <div class="element">
            <span>Napisz do nas!</span>
            <!-- <div class="mail">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/mail.svg" /> <a
                    href="mailto:officet@scarletpine.com">office@scarletpine.com</a>
            </div> -->



            <?= do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?>


        </div>


    </div>

</footer>

<div class="copyright">
    <p>Copyright © Scarlet Pine <span id="acutalDate"></span></p>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/fb.svg" />
</div>
<?php wp_footer(); ?>

</body>

</html>