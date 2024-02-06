<div id="footer">
        <div class="container">
            <div class="flex-item">
                <div class="title">The Couples Collective</div>
                <div class="description">
                    <p>
                        The Couples Collective was established in the San Francisco Bay Area and now serves couples throughout California remotely.
                    </p>
                </div>
                <div>
                    <a class="footer-outline-button" href="tel:5103739995">Call now (510) 373-9995</a>
                </div>
                <div>
                    <a class="footer-fill-button" href="/contact" target="_blank">Schedule a free consultation</a>
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
                <div class="title">In person locations</div>
                <div class="description">
                    <div class="location-link">
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <a href="https://goo.gl/maps/AmXYrQquujy7HErc6" target="_blank">
                                4281 Piedmont Ave, Suite 2
                                <br>Oakland, CA 94611
                            </a>
                        </div>
                    </div>
                    <div class="location-link">
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <a href="https://maps.app.goo.gl/Au7jdeRZKPZ4oNFv8" target="_blank">
                                1947 Divisadero St, Suite 1
                                <br>San Francisco, CA 94115
                            </a>
                        </div>
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
                    <a class="footer-fill-button" href="/blog">Read our blog</a>
            </div>
        </div>
    </div>
