<?php

require_once locate_template('/lib/plugins.php');
require_once locate_template('/lib/config.php');
require_once locate_template('/lib/widgets.php');
require_once locate_template('/lib/scripts.php');
require_once locate_template('/lib/menu-walker.php');

// Hide admin bar
add_filter('show_admin_bar', '__return_false');
