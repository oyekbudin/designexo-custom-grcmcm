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

				<article class="post-card h-100">
                    
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail mb-2">
                            <a href="<?php the_permalink(); ?>">
                                <?php 
                                    // Menambahkan class 'rounded' agar sudut gambar tumpul seperti di gambar
                                    the_post_thumbnail('medium', ['class' => 'img-fluid rounded w-100 object-fit-cover']); 
                                ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="post-content">
                        <h6 class="post-title fw-bold mb-1">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                                <?php 
                                    // Membatasi judul agar tidak terlalu panjang jika perlu
                                    echo wp_trim_words(get_the_title(), 10, '...'); 
                                ?>
                            </a>
                        </h6>

                        <small class="post-time text-muted">
                            <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' lalu'; ?>
                        </small>
                    </div>

                </article>
            

<!-- #post-<?php the_ID(); ?> -->