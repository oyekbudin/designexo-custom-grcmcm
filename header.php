<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    <?php if (is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>
</head>
<?php
$class = 'theme-wide';
?>

<body <?php body_class(esc_attr($class)); ?>>

    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    } else {
        do_action('wp_body_open');
    }
    ?>
    <a class="screen-reader-text skip-link" href="#content"><?php esc_html_e('Skip to content', 'designexo'); ?></a>
    <div id="wrapper">
        <?php get_template_part('template-parts/site', 'navbar'); ?>