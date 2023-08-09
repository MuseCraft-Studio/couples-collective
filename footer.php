<div id="footer">
        <div class="container">
            <div class="flex-item">
                <div class="title">The Couples Collective</div>
                <div class="description">
                    <p>
                        Using emotionally focused couples therapy to build stronger bonds with your loved one. We work
                        with
                        couples and individuals to support their growth and life goals by matching you with the right
                        therapist.
                    </p>
                    <p>
                        The Couples Collective was started in the San Francisco Bay Area and now services more couples
                        across California remotely.
                    </p>
                </div>
                <div>
                    <a class="footer-outline-button" href="tel:5103739995">Call now (510) 373-9995</a>
                </div>
                <div>
                    <a class="footer-fill-button" href="https://forms.gle/PwZLNmbNeMNwkArAA" target="_blank">Schedule a free consultation</a>
                </div>
            </div>
            <div class="flex-item">
                <div class="title">Navigation</div>
                <div class="nav-list">
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'footer',
                            'container' => '',
                            'theme_location' => 'footer',
                            'items_wrap' => '%3$s'
                        )
                    );
                ?>
                </div>
            </div>
            <div class="break"></div>
            <div class="flex-item">
                <div class="title">Stay connected</div>
                <div class="logo-links">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-facebook.svg" />
                    </div>
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-linkedin.svg" />
                    </div>
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-yelp.svg" />
                    </div>
                </div>
            </div>
            <div class="flex-item">
                    <div class="title">Check out our blog!</div>
                    <div class="description">
                        <p>
                            Want to see more tips on how to build healthy and blooming relationships? Check out our blog here!
                        </p>
                    </div>
                    <button class="footer-fill-button">Read our blog</button>
            </div>
        </div>
    </div>
