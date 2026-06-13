<?php
/**
 * Template part for displaying page content in page.php Ini adalah template Halaman
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package designexo
 */

?>

<div class="post wow animate fadeInUp" <?php post_class(); ?> data-wow-delay=".3s">
    <!-- Intro -->
    <header class="theme-main-slider" id="theme-slider">

        <div class="hero-banner" style="background-image: url(
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
				
                <h2 class="subjudul-post"><?php bloginfo('name'); ?></h2>
                <p class="subjudul-post"><?php bloginfo('description'); ?></p>
            </div>

            <div class="overlay"></div>

        </div>

    </header>
<nav class="layanan-kami">
	<h2 class="mt-3">
		LAYANAN KAMI
	</h2>
	<ul class="d-flex flex-wrap justify-content-center">
		<li class="px-3 my-2 mx-2"><a>Kontraktor Kubah Masjid</a></li>
		<li class="px-3 my-2 mx-2"><a>Kontraktor Menara Masjid</a></li>
		<li class="px-3 my-2 mx-2"><a>Pembuatan Mihrab Masjid</a></li>
		<li class="px-3 my-2 mx-2"><a>Kontraktor Pembangunan / Renovasi Masjid</a></li>
		<li class="px-3 my-2 mx-2"><a>Kontraktor Pembangunan Rumah Klasik</a></li>
	</ul>
	</nav>
	<main>
		<section class="layanan-list d-flex align-items-center flex-column" id="">
        
            <h2>SEMUA LAYANAN</h2>
            <div class="row">
                <a href="https://grcmcm.web.id/jasa-arsitek-dan-kontraktor-rumah-tinggal-profesional-di-kota-bandung/" class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/rumah-.png">
                    </div>
					
					<h3>Kontraktor Rumah Tinggal</h3>
				</a>
                <a href="https://grcmcm.web.id/kontraktor-bangun-renovasi-perumahan-profesional-di-bandung/" class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/perumahan-.png">
                    </div>
					
					<h3>Kontraktor Perumahan</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/kos-kosan-.png">
                    </div>
					
					<h3>Kontraktor Kost-Kostan</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/villa-.png">
                    </div>
					
					<h3>Kontraktor Villa</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/masjid-.png">
                    </div>
					
					<h3>Kontraktor Masjid</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/serbaguna-.png">
                    </div>
					
					<h3>Kontraktor Gedung Serbaguna</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/ruko-.png">
                    </div>
					
					<h3>Kontraktor Ruko</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/rukan-.png">
                    </div>
					
					<h3>Kontraktor Rukan</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/kafe-.png">
                    </div>
					
					<h3>Kontraktor Kafe</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/minimarket-.png">
                    </div>
					
					<h3>Kontraktor Minimarket</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/sekolah-.png">
                    </div>
					
					<h3>Kontraktor Gedung Sekolah</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/kampus-.png">
                    </div>
					
					<h3>Kontraktor Kampus</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/warehouse-.png">
                    </div>
					
					<h3>Kontraktor Warehouse</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/pabrik-.png">
                    </div>
					
					<h3>Kontraktor Pabrik</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/workshop-.png">
                    </div>
					
					<h3>Kontraktor Workshop</h3>
				</a>
                <a class="col-3 col-md-2 col-lg-1 layanan-list-item text-center m-0 p-2">
                    <div class="ikon-list">
                        <img src="https://grcmcm.web.id/wp-content/uploads/2026/05/gor-.png">
                    </div>
					
					<h3>Kontraktor GOR</h3>
				</a>
            </div>
        
    </section>
		<article>
		<div class="bagian-artikel">
                    <?php 
																echo '<div class="tanggal-artikel" ><i class="fa fa-calendar"></i>Terakhir diperbarui: ' . get_the_date() . '</div>';
																?>
                    <div class="jendela-artikel">
                        <div class="header-artikel">
                            <img width="auto" height="50"
                                src="https://grcmcm.web.id/wp-content/uploads/2026/04/logo_grc_mcm_berwarna-1-scaled.png"
                                class="custom-logo" alt="GRC MCM" decoding="async" fetchpriority="high"
                                srcset="https://grcmcm.web.id/wp-content/uploads/2026/04/logo_grc_mcm_berwarna-1-scaled.png 2560w, https://grcmcm.web.id/wp-content/uploads/2026/04/logo_grc_mcm_berwarna-1-300x111.png 300w, https://grcmcm.web.id/wp-content/uploads/2026/04/logo_grc_mcm_berwarna-1-1024x378.png 1024w, https://grcmcm.web.id/wp-content/uploads/2026/04/logo_grc_mcm_berwarna-1-768x284.png 768w, https://grcmcm.web.id/wp-content/uploads/2026/04/logo_grc_mcm_berwarna-1-1536x567.png 1536w"
                                sizes="(max-width: 2560px) 100vw, 2560px"><br>
                            <?php 
	the_title('<h2>', '</h2>');
	?>
                        </div>
                        <div class="isi-artikel">
							<!-- start wa -->
							<div class="faq-wrapper">

  <!-- HEADER -->
  <div class="faq-header">
    Admin • Online
  </div>

  <!-- CONTENT -->
  <div class="faq-content">
                            <?php 
	the_content();
	?>
                          </div>

  <!-- FOOTER -->
  <div class="faq-footer">
    <div class="faq-input">Ketik pesan...</div>
  </div>

</div>
							<!-- end WA -->
							</div>

                    </div>
					</div>
		</article>
	</main>
	<footer>
	

    
    

    <!-- end Intro -->


    <div class="post-content">
        <div class="media mb-3">


            <div class="media-body">
                
                    <!-- jendela artikel -->
                    <div class="jendela-artikel">
                        <div class="isi-artikel">
                            <h2 class="sub-judul">
                                Kantor GRC MCM - CV Mentari Cahaya Mandiri
                            </h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.288530731042!2d107.83674157505587!3d-6.975245093025465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c55fb050cbe3%3A0x4643cbf5e8159811!2sKANTOR.GRC.MCM.GRUOP%20BANDUNG.!5e0!3m2!1sid!2sid!4v1775982520501!5m2!1sid!2sid"
                                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
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
				
<section id="portfolio" class="py-5">
  <div class="container">
<h2 class="text-center">PORTOFOLIO DESAIN DAN MOTIF KUBAH</h2>
    <div class="row g-3">

      <?php
      $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 12,
        'category_name'  => 'kubah',
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>

      <div class="col-lg-2 col-md-3 col-6 p-1">
        <div class="card h-100">

          <!-- Gambar -->
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium', [
                'class' => 'card-img-top',
                'alt'   => get_the_title()
              ]); ?>
            <?php else : ?>
              <img 
                src="https://grcmcm.web.id/wp-content/uploads/2026/04/projek_01-1.png"
                class="card-img-top"
                alt="gambar default">
            <?php endif; ?>
          </a>

          <!-- Tulisan -->
          <div class="card-body p-2">
            <h6 class="mb-0">
              <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                <?php
								$tags = get_the_tags();
								if ( $tags ) {
									echo $tags[0]->name; // Mengambil nama tag pertama
								} else {
									echo "No Tag"; // Pesan jika post tidak punya tag
								}
								?>
              </a>
            </h6>
          </div>

        </div>
      </div>

      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

    </div>

  </div>
</section>
				
                    <section id="portfolio" class="py-5">
  <div class="container">
<h2 class="text-center">PORTOFOLIO DESAIN DAN MOTIF KRAWANGAN</h2>
    <div class="row g-3">

      <?php
      $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 12,
        'category_name'  => 'krawangan',
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>

      <div class="col-lg-2 col-md-3 col-6 p-1">
        <div class="card h-100">

          <!-- Gambar -->
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium', [
                'class' => 'card-img-top',
                'alt'   => get_the_title()
              ]); ?>
            <?php else : ?>
              <img 
                src="https://grcmcm.web.id/wp-content/uploads/2026/04/projek_01-1.png"
                class="card-img-top"
                alt="gambar default">
            <?php endif; ?>
          </a>

          <!-- Tulisan -->
          <div class="card-body p-2">
            <h6 class="mb-0">
              <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                <?php
								$tags = get_the_tags();
								if ( $tags ) {
									echo $tags[0]->name; // Mengambil nama tag pertama
								} else {
									echo "No Tag"; // Pesan jika post tidak punya tag
								}
								?>
              </a>
            </h6>
          </div>

        </div>
      </div>

      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

    </div>

  </div>
</section>
                
            </div>
        </div>
    </div>
		</footer>

</div>

<!-- #post-<?php the_ID(); ?> -->