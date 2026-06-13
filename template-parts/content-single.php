<?php
/**
 * Template part for displaying posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package designexo
 */
 $blog_content_ordering = get_theme_mod( 'designexo_general_blog_arcive_single_content_ordering', array( 'title', 'meta', 'content', )); 
$designexo_general_meta_date_disable = get_theme_mod( 'designexo_general_meta_date_disable', true );
?>
<article class="post wow animate fadeInUp" <?php post_class(); ?> data-wow-delay=".3s">		
	<!-- Intro -->
	<section class="theme-main-slider" id="theme-slider">

    <div class="hero-banner"
    style="background-image: url(
        <?php
        if ( has_post_thumbnail() ) {
            echo get_the_post_thumbnail_url(get_the_ID(), 'full');
        } else {
            echo 'https://grcmcm.web.id/wp-content/uploads/2026/04/banner_kubah_01.webp';
        }
        ?>
    );">

        <div class="container hero-content">
            <?php $title = get_the_title();

if ( ! empty($title) ) {
    echo '<h1 class="judul-post">' . esc_html($title) . '</h1>';
};
						?>
            <h5 class="subjudul-post">GRC MCM</h5>
            <p class="subjudul-post">CV Mentari Cahaya Mandiri</p>
        </div>

        <div class="overlay"></div>

    </div>

</section>

						
	<section class="theme-info-area " id="theme-info-area">
<div class="container">
	<div class="row">
										<div class="col-lg-3 col-md-6 col-xs-12">
							<div class="media wow animate flipInX" data-wow-delay=".3s">
									
								<div class="media-body align-self-center">
																		<h5 class="theme-info-area-title">kubah</h5>
																			
								</div>
							</div>
						</div>
										<div class="col-lg-3 col-md-6 col-xs-12">
							<div class="media wow animate flipInX" data-wow-delay=".3s">
									
								<div class="media-body align-self-center">
																		<h5 class="theme-info-area-title">menara</h5>
																			
								</div>
							</div>
						</div>
										<div class="col-lg-3 col-md-6 col-xs-12">
							<div class="media wow animate flipInX" data-wow-delay=".3s">
									
								<div class="media-body align-self-center">
																		<h5 class="theme-info-area-title">Krawangan &amp; Masif</h5>
																			
								</div>
							</div>
						</div>
										<div class="col-lg-3 col-md-6 col-xs-12">
							<div class="media wow animate flipInX" data-wow-delay=".3s">
									
								<div class="media-body align-self-center">
																		<h5 class="theme-info-area-title">Kaligrafi</h5>
																			
								</div>
							</div>
						</div>
					</div>
</div>
</section>
	<!-- portofolio section -->
<section class="theme-block theme-services " id="theme-services">
	<div class="container">
		<div class="row theme-services-content">
			
			<!-- munculkan artikel -->
			<?php
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 4,
					'category_name'  => 'kubah',
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
				?>

				<div class="col-lg-3 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">

						<figure class="service-content-thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
								<?php else : ?>
									<img class="img-fluid" src="https://grcmcm.web.id/wp-content/uploads/2026/04/projek_01-1.png">
								<?php endif; ?>
							</a>
						</figure>								

						<h5 class="service-title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h5>

					</article>
				</div>

				<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>			
		</div>
	</div>
</section>
	<!-- end portofolio section -->
	
	<!-- end Intro -->
		   
	
			<div class="post-content">
			    <div class="media mb-3">
                   						

								<div class="media-body">
			        										<div class="container bagian-artikel">
																<?php 
																echo '<div class="tanggal-artikel" ><i class="fa fa-calendar"></i>Terakhir diperbarui: ' . get_the_date() . '</div>';
																?>
<div class="jendela-artikel">
<div class="header-artikel">
    <img width="auto" height="50" src="https://grcmcm.web.id/wp-content/uploads/2026/04/logo_grc_mcm_berwarna-1-scaled.png" class="custom-logo" alt="GRC MCM" decoding="async" fetchpriority="high" srcset="https://grcmcm.web.id/wp-content/uploads/2026/04/logo_grc_mcm_berwarna-1-scaled.png 2560w, https://grcmcm.web.id/wp-content/uploads/2026/04/logo_grc_mcm_berwarna-1-300x111.png 300w, https://grcmcm.web.id/wp-content/uploads/2026/04/logo_grc_mcm_berwarna-1-1024x378.png 1024w, https://grcmcm.web.id/wp-content/uploads/2026/04/logo_grc_mcm_berwarna-1-768x284.png 768w, https://grcmcm.web.id/wp-content/uploads/2026/04/logo_grc_mcm_berwarna-1-1536x567.png 1536w" sizes="(max-width: 2560px) 100vw, 2560px"><br>
	<?php 
	the_title('<h3>', '</h3>');
	?>
        </div>
    <div class="isi-artikel">
        <?php 
	the_content();
	?>
    </div>
	
</div>
<!-- jendela artikel -->																
<div class="jendela-artikel">
	<div class="isi-artikel">
		<h3 class="sub-judul">
			Kantor GRC MCM - CV Mentari Cahaya Mandiri
		</h3>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.288530731042!2d107.83674157505587!3d-6.975245093025465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c55fb050cbe3%3A0x4643cbf5e8159811!2sKANTOR.GRC.MCM.GRUOP%20BANDUNG.!5e0!3m2!1sid!2sid!4v1775982520501!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h5>GRC MCM GROUP BANDUNG</h5>
		<h5>Alamat</h5>
		<span>Jl. Bay Pass Cicalengka Kab. Bandung KM. 30 (Depan SPPBE)</span>
		<h5>Telp. / WA</h5>
		<span>0812-2407-6187</span>
			</div>
		</div>
	</div>
</div>
<!-- end jendela artikel -->
																
<!-- portofolio section -->
<section class="theme-block theme-services " id="theme-services">
	<div class="container">
		<div class="row theme-services-content">
			
			<!-- munculkan artikel -->
			<?php
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 50,
					'category_name'  => 'kubah',
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
				?>

				<div class="col-lg-3 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">

						<figure class="service-content-thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
								<?php else : ?>
									<img class="img-fluid" src="https://grcmcm.web.id/wp-content/uploads/2026/04/projek_01-1.png">
								<?php endif; ?>
							</a>
						</figure>								

						<!--h5 class="service-title">
							<a href="<//?php the_permalink(); ?>">
								<//?php the_title(); ?>
							</a>
						</h5-->
						<h5 class="service-title">
							<a href="<?php the_permalink(); ?>">
								<?php
								$tags = get_the_tags();
								if ( $tags ) {
									echo $tags[0]->name; // Mengambil nama tag pertama
								} else {
									echo "No Tag"; // Pesan jika post tidak punya tag
								}
								?>
							</a>
						</h5>

					</article>
				</div>

				<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>			
		</div>
	</div>
</section>
	<!-- end portofolio section -->
																<!-- portofolio section -->
<section class="theme-block theme-services " id="theme-services">
	<div class="container">
		<div class="row theme-services-content">
			
			<!-- munculkan artikel -->
			<?php
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 50,
					'category_name'  => 'krawangan',
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
				?>

				<div class="col-lg-3 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">

						<figure class="service-content-thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
								<?php else : ?>
									<img class="img-fluid" src="https://grcmcm.web.id/wp-content/uploads/2026/04/projek_01-1.png">
								<?php endif; ?>
							</a>
						</figure>								

						<!--h5 class="service-title">
							<a href="<//?php the_permalink(); ?>">
								<//?php the_title(); ?>
							</a>
						</h5-->
						<h5 class="service-title">
							<a href="<?php the_permalink(); ?>">
								<?php
								$tags = get_the_tags();
								if ( $tags ) {
									echo $tags[0]->name; // Mengambil nama tag pertama
								} else {
									echo "No Tag"; // Pesan jika post tidak punya tag
								}
								?>
							</a>
						</h5>

					</article>
				</div>

				<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>			
		</div>
	</div>
</section>
	<!-- end portofolio section -->
</div>
 </div>
				</div>
		    </div>
			
</article><!-- #post-<?php the_ID(); ?> -->