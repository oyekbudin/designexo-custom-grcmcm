<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package designexo
 */

get_header();
?>

<section class="theme-block theme-blog theme-bg-grey">
  <div class="container">
    <div class="row">
      
      <div class="col-12 p-0">

        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();

            get_template_part('template-parts/content', 'page');

          endwhile;
        endif;
        ?>

      </div>

    </div>
  </div>
</section>

<?php
get_footer();