<section class="schedule">
    <div class="container">
        <div class="transparent_bg">
            <h2 class="section-title">SCHEDULE</h2>
            <div class="schedule-wrapper">
            <?php 
            if (is_archive()):
                $term       = get_queried_object();
                $term_id    = $term->term_id;
                $taxonomy   = 'category';
                $field_name = 'schedule';
                $schedules = SCF::get_term_meta( $term_id, $taxonomy, $field_name );
                foreach($schedules as $schedule):
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
                elseif(is_page() || is_singular()) :
                ?>
            
                <?php
                $schedules = SCF::get('schedule');
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
            <button class="schedule-button contact-button" onclick="location.href='<?php the_field('book_ticket') ?>'">お問い合わせはこちら</button>
            <button class="schedule-button move-book" onclick="location.href='<?php the_field('book_ticket') ?>'">チケット予約サイトへ</button>
        </div>
    </div>
</section>