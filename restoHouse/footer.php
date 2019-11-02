<footer>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora quidem nostrum obcaecati sapiente unde minima vel voluptatum porro est? Sed quaerat distinctio quia consectetur dicta voluptatem deserunt odit recusandae optio?</p>
        <div style="display:flex">
                <hr>
                <?php if ( has_nav_menu( 'footer-menu' ) ): ?>
                <?php 
    					wp_nav_menu(
                            [
                                'theme_location' => 'footer-menu',
    							'menu_id'        => 'footer-menu',
                                ]
                            );
                            ?>
                        <?php endif;?>
                    </div>
                </footer>
                <?php  wp_footer() ?>
</body>
</html>