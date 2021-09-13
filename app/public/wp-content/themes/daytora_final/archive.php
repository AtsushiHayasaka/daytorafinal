<?php get_header(); ?>
<?php get_template_part('template-parts/header'); ?>
</div>
<!-- breadcrumb -->
<?php get_template_part('template-parts/breadcrumb'); ?>
<!-- /breadcrumb -->

<section class="news">
    <div class="container">
        <h2 class="section-title">NEWS</h2>
        <?php if (have_posts()) : ?>
            <ul class="news-grid wow fadeIn">
                <?php
                while (have_posts()):
                    the_post();
                ?>
                   
                    <li>
                        <a href="<?php the_permalink(); ?>" class="news-grid-item">

                            <div class="news-image-area">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('large');
                                } else {
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/noimg.png" alt="">';
                                }
                                ?>
                            </div>
                            <div class="news-contents">
                                <time class="date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                                <p class="news-content"><?php the_title(); ?></p>
                            </div>

                        </a>
                    </li>
                <?php endwhile; ?>

            </ul>
        <?php endif; ?>
        <div class="pagenation">
            <?php
            echo
                paginate_links(
                    array(
                        'end_size' => 0,
                        'mid_size' => 1,
                        'prev_next' => true,
                        'prev_text' => '<i class="fas fa-angle-left"></i>',
                        'next_text' => '<i class="fas fa-angle-right"></i>',
                    )
                );
            ?>
           
        </div><!-- /pagenation -->
    </div>
</section>

<?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>
</body>