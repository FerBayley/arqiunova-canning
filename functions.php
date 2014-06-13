<?php function favicon() { ?>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<?php }
add_action('wp_head', 'favicon');
?>