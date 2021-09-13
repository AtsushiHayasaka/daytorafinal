<?php get_header(); ?>
<?php get_template_part('template-parts/header');?>

    </div>

    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <!-- /breadcrumb -->

    <section class="inquiry">
        <h2 class="section-title">INQUIRY</h2>
        <div class="container">
            <div class="transparent-bg">
                <p id='js_before_complete' class="inquiry-description">
                    小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>
                    公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>
                    お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。
                </p>
                <?php the_content(); ?>
                

            </div>
        </div>
    </section>

    <section class="news">
    <div class="container">
        <h2 class="section-title">
            NEWS
        </h2>

        <div class="news-item-wrapper wow fadeIn">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $new_posts = get_posts($args);
            foreach ($new_posts as $post) : setup_postdata($post);
            ?>
          

            <div class="news-item">
                <a href="<?php the_permalink(); ?>">
                    <div class="news-image-area">
                        <?php
                        if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                            <img src="<?php esc_url(get_template_directory_uri()); ?>/image/noimg.png" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="news-contents">
                        <span class="date"><?php the_time();?></span>
                        <p class="news-content"><?php the_title(); ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach;
            wp_reset_postdata(); ?>

        </div>

        <div class="under-news-item-wrapper hidden-sp">
            <?php
            $pickup_posts = get_posts( array(
                'post_type' => 'post',
                'posts_per_page' => '2',
                'tag' => 'pickup',
                'orderby' => 'DESC',
            ));
            ?>
            <?php foreach($pickup_posts as $post): setup_postdata($post); ?>
            <div class="under-news-item">
                <a href="<?php the_permalink(); ?>">
                    <div class="under-news-image-area">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } else {
                       echo '<img src="'.esc_url(get_template_directory_uri()).'/image/noimg.png" alt="">';
                    }
                    ?>
                    </div>
                    <div class="under-news-contents">
                        <span class="date"><?php the_time(); ?></span>
                        <p class="news-content"><?php the_title(); ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach; wp_reset_postdata(); ?>
            
        </div>
        <button onclick="location.href='http://daytorafinal.local/archive/category/news/'" class="news-detail">ニュース一覧へ</button>
    </div>
</section>

    <?php get_template_part('template-parts/schedule'); ?>

    <?php get_footer(); ?>