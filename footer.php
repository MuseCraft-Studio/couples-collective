<div id="footer">
        <div class="container">
            <div class="flex-item about">
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
                <button class="footer-outline-button">Call now (510) 373-9995</button>
                <button class="footer-fill-button">Schedule a free consultation</button>
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
            <div class="flex-item">
                <div class="title">Stay connected</div>
                <div class="logo-links">
                    <div>
                        <img src="/wordpress/wp-content/themes/couples-collective/assets/images/footer-facebook.svg" />
                    </div>
                    <div>
                        <img src="/wordpress/wp-content/themes/couples-collective/assets/images/footer-linkedin.svg" />
                    </div>
                    <div>
                        <img src="/wordpress/wp-content/themes/couples-collective/assets/images/footer-yelp.svg" />
                    </div>
                </div>
            </div>
            <div class="flex-item">
                <form action="javascript:" onsubmit="signup()" class="sign-up">
                    <div class="title">Sign up for our newsletter</div>
                    <div class="description">
                        <p>
                            Want to know when we get a new blog post or release new resources that can help you grow at
                            home? Sign up below!
                        </p>
                    </div>
                    <input #bloop class="input" type="email" placeholder="Email address" name="mail" required>
                    <div>
                        <input type="submit" class="footer-fill-button" value="Subscribe">
                    </div>
                </form>
            </div>
        </div>
    </div>
