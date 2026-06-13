<?php
/**
 * The template for displaying archive pages
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package designexo
 */
get_header();
get_template_part('template-parts/site', 'breadcrumb');
$designexo_archive_blog_pages_layout = get_theme_mod('designexo_archive_blog_pages_layout', 'designexo_right_sidebar');
$designexo_archive_blog_container_size = get_theme_mod('designexo_archive_blog_container_size', 'container');
if ($designexo_archive_blog_container_size == 'container-full') {
	$container = '9';
} else {
	$container = '8';
}
?>

<section class="theme-block theme-blog theme-blog-large theme-bg-grey">
	<!-- Old Berita -->
	<div class="<?php echo esc_attr($designexo_archive_blog_container_size); ?> theme-bg-light">

		<div class="row">

			<!-- SIDEBAR KIRI -->
			<?php if ($designexo_archive_blog_pages_layout == 'designexo_left_sidebar' || !$designexo_archive_blog_pages_layout == 'designexo_no_sidebar'): ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>

			<!-- KONTEN -->
			<?php if ($designexo_archive_blog_pages_layout == 'designexo_no_sidebar'): ?>
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php else: ?>
					<div
						class="col-lg-<?php echo (!is_active_sidebar('sidebar-main') ? '12' : esc_attr($container)); ?> col-md-<?php echo (!is_active_sidebar('sidebar-main') ? '12' : esc_attr($container)); ?> col-sm-12">
					<?php endif; ?>

					<!-- BERITA -->
					<div class="container my-5">
						<div class="row g-3">

							<?php if (have_posts()): ?>
								<?php while (have_posts()):
									the_post(); ?>

									<div class="col-md-6 col-lg-4">

										<div class="berita-card h-100">

											<a href="<?php the_permalink(); ?>" class="text-decoration-none">

												<!-- IMAGE -->
												<img src="<?php
												$img = get_the_post_thumbnail_url(get_the_ID(), 'medium');
												echo $img ? $img : get_template_directory_uri() . '/assets/img/health/cardiology-2.webp';
												?>" class="berita-img" alt="<?php the_title(); ?>" loading="lazy">

												<!-- CONTENT -->
												<div class="p-3">

													<h5 id="judul-berita-home">
														<?php the_title(); ?>
													</h5>

													<span class="tanggal-berita-home">
														<i class="bi bi-clock"></i>
														<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' lalu'; ?>
													</span>

												</div>

											</a>

										</div>

									</div>

								<?php endwhile; ?>

								<!-- PAGINATION -->
								<div class="col-12 mt-4">
									<?php the_posts_pagination(array(
										'prev_text' => '<i class="fa fa-angle-double-left"></i>',
										'next_text' => '<i class="fa fa-angle-double-right"></i>'
									)); ?>
								</div>

							<?php else: ?>

								<div class="col-12 text-center">
									<p>Tidak ada berita ditemukan.</p>
								</div>

							<?php endif; ?>

						</div>
					</div>
					<!-- END BERITA -->

				</div>

				<!-- SIDEBAR KANAN -->
				<?php if ($designexo_archive_blog_pages_layout == 'designexo_right_sidebar' || !$designexo_archive_blog_pages_layout == 'designexo_no_sidebar'): ?>
					<?php get_sidebar(); ?>
				<?php endif; ?>

			</div>

			ubah menjadi seperti ini

			<!-- Berita -->



			<div class="row g-3">

				@foreach ($databerita as $db)
				<div class="col-md-6 col-lg-4">


					<div class="berita-card h-100">

						<a href="{{ route('show', $db->slug) }}" class="text-decoration-none">
							<!-- IMAGE -->
							<img src="{{ $db->gambar ? asset($db->gambar) : asset('assets/img/health/cardiology-2.webp') }}"
								class="berita-img" alt="{{ $db->judul }}" loading="lazy">

							<!-- CONTENT -->
							<div class="p-3">

								<h5 id="judul-berita-home" class="">{{ $db->judul }}</h5>

								<span class="tanggal-berita-home">
									<i class="bi bi-clock"></i>
									{{ \Carbon\Carbon::parse($db->tanggal_publish)->diffForHumans() }}
								</span>

							</div>
						</a>



					</div>


				</div>
				@endforeach

			</div>
			@endforeach

			<!-- end Berita -->
</section>
<?php get_footer(); ?>