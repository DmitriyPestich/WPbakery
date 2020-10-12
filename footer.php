<?php global $wpbakery;?>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <h3 class="footer-heading mb-4">About Hairsal</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
                </div>



            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Quick Menu</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer_menu',
                            'menu_id'        => 'footer_menu',
                            'menu_class'     => 'list-unstyled',
                            'container'      => ''
                        ) );
                        ?>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer_menu_last',
                            'menu_id'        => 'footer_menu_last',
                            'menu_class'     => 'list-unstyled',
                            'container'      => ''
                        ) );
                        ?>
                    </div>
                </div>



            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">


                <div class="mb-5">
                    <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

                    <form action="#" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="mb-5">

                    <?php if($wpbakery['social_profiles']){
                        foreach ($wpbakery['social_profiles'] as $key => $value){
                            $icon = '';
                            if($key == 'Facebook Profile'){
                                $icon = 'icon-facebook';
                            } else if($key == 'Twiter Profile') {
                                $icon = 'icon-twitter';
                            } else if($key == 'Instagram Profile') {
                                $icon = 'icon-instagram';
                            } else if($key == 'Youtube Profile') {
                                $icon = 'icon-youtube-play';
                            } else {
                                $icon = 'icon-home';
                            }
                            ?>

                            <?php if($value){?>
                                <a href="<?php echo esc_url($value);?>" class="pl-0 pr-3"><span class="<?php echo esc_attr($icon);?>"></span></a>
                            <?php }?>

                        <?php }
                    }
                    ?>
                </div>

                <p>
                    <?php if($wpbakery['copy']){
                        echo esc_attr($wpbakery['copy']);
                    } else { ?>
                        Copyright &copy; All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <?php }?>
                </p>
            </div>

        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
