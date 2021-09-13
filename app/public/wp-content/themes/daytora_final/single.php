<?php get_header(); ?>
<?php get_template_part('template-parts/header'); ?>
</div>
    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb');?>
    <!-- /breadcrumb -->

    <section class="news">
        <div class="container">
            <h2 class="section-title">NEWS</h2>
            <?php 
            if(have_posts()):
            while(have_posts()): the_post();
            ?>
            <div class="news-item">
                <div class="news-image">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail('large');
                    }else {
                        echo '<img src="'.esc_url(get_template_directory_uri()).'/image/noimg.png" alt="">';
                    }
                    ?>
                </div>
                <div class="news-title">
                    <time class="date" datetime="<?php the_time('c') ;?>"><?php the_time('Y/n/j'); ?></time>
                    <h1 class="item-title"><?php the_title(); ?></h1>
                </div>
                <div class="item-contents">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php 
            endwhile;
            endif; 
            ?>
            
            <div class="pagenation">

                <div class="pagenation-item pagenation-before">
                <?php $next_post = get_next_post(); ?>
                <?php if(!empty($next_post)): ?>                
                    <div class="pagenation-date-title">
                        <span class="date date-before"><?php echo get_the_time('Y.m.d',$next_post->ID); ?></span>
                        <p class="page-title beforepage-title">
                            <?php next_post_link('%link'); ?>
                        </p>

                    </div>
                    <a class="before page-button" href="<?php the_permalink($next_post->ID); ?>"><i class="fas fa-angle-left"></i></a>
                    <?php endif; ?>
                </div>
                
                
                <div class="pagenation-item pagenation-next">
                <?php $prev_post = get_previous_post(); ?>                
                <?php if(!empty($prev_post)): ?>
                    <div class="pagenation-date-title">
                        <span class="date date-next"><?php echo get_the_time('Y.m.d',$prev_post->ID); ?></span>
                        <p class="page-title nextpage-title">
                        <?php previous_post_link('%link'); ?>
                        </p>
        
                    </div>
                    <a class="next page-button" href="<?php the_permalink($prev_post->ID); ?>"><i class="fas fa-angle-right"></i></a>
                <?php endif; ?>
                </div>
             
                
      
            </div><!-- /pagenation -->
        </div>
    </section>



    <section class="schedule">
        <div class="container">
            <div class="transparent_bg">
                <h2 class="section-title">SCHEDULE</h2>
                <div class="schedule-wrapper">
                <?php
                $schedules = SCF::get('schedule');
                if ($schedules):
                foreach ($schedules as $schedule ):
                ?>
                <div class="schedule-contents">
                    <div class="date-time">
                        <p class="schedule-content schedule-date"><?php echo $schedule['date']; ?></p>
                        <p class="schedule-content schedule-time"><?php echo $schedule['time']; ?>開講</p>
                    </div>
                    <div class="place-ticket">
                        <p class="schedule-content schedule-place"><?php echo $schedule['place']; ?></p>
                        <p class="schedule-content schedule-ticket"><a href="<?php echo $schedule['link']; ?>">チケット予約受付中</a></p>
                    </div>
                </div>
                <?php 
                endforeach; 
                else :
                ?>
                <p class="schedule-content">現在予定している講演はありません</p>
                <?php endif; ?>
                </div>
            </div>
            <div class="button-area">
                <button class="schedule-button contact-button">お問い合わせはこちら</button>
                <button class="schedule-button move-book">チケット予約サイトへ</button>
            </div>
        </div>
    </section>

   <?php get_footer(); ?>
</body>