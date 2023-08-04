<div id="navigation">
    <div class="header">
        <div class="header-flex">
            <div class="title">
                <a href="/">
                    The Couples Collective
                </a>
            </div>
            <div class="right-nav-desktop">
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '%3$s'
                        )
                    );
                ?>
                <button class="fill-button">Call now: (510) 373-9995</button>
            </div>
            <div class="tablet-mobile-nav-row">
                <div class="topnav">
                    <div class="icon" onclick="responsiveNav()">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div id="myLinks">
                        <?php
                            wp_nav_menu(
                                array(
                                    'menu' => 'primary',
                                    'container' => '',
                                    'theme_location' => 'primary',
                                    'items_wrap' => '%3$s'
                                )
                            );
                        ?>
                        <div>
                        <a class="fill-button" href="tel:8882192787">Call Now</a>
                            <!-- <button class="fill-button">Call Now</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>