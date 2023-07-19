<div id="navigation">
    <div class="header">
        <div class="header-flex">
                <div class="title">
                    The Couples Collective
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
                    <buton class="fill-button">Call Now</buton>
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
                                <buton class="fill-button">Call Now</buton>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>