<?php
function register_my_menu() {
  register_nav_menu('default-menu-location',__( 'Default menu location' ));
}
add_action( 'init', 'register_my_menu' );
