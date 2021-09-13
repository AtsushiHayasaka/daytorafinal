<?php get_header(); ?>
<?php get_template_part('template-parts/header');?>

    </div>

    <!-- breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
        <?php get_template_part('template-parts/breadcrumb'); ?>
        </div>
    </div><!-- /breadcrumb -->

    <section class="comments">
        <div class="container wow fadeIn">
            <h2 class="section-title">COMMENTS</h2>
            <p class="comments-description ">
                舞台関係者のみならず各界著名人から<br class="only-sp">コメントが届いています！
            </p>
            <div class="comments-contents hidden-sp">
                <p class=comment-name>京都佛立ミュージアム<br class="only-sp">館長<br class="only-sp"><span>長松清潤</span></p>
                <p class="comment-content hidden-sp">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
                    まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
            </div>

            <div class="comments-contents-sp only-sp">
                <div class="image-space"></div>
                <div class="comments-text">
                    <p class=comment-job>京都佛立ミュージアム館長<br class="only-sp"></p>
                    <p class="comment-name">長松清潤</p>
                    <p class="comment-content">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
                        まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
                </div>
            </div>
        </div>

    </section>

    <section class="comments-table">
        <div class="container">
            <ul class="comments-table-grid">
            <?php 
            $comments = SCF::get('comments');
            foreach ($comments as $comment):
            ?>
                <li class="wow fadeIn">
                    <a href="" class="comments-table-grid-item">
                        <div class="comment-profile">
                            <p class="comment-name"><?php echo $comment['commentsname'];?></p>
                            <span class="comment-job"><?php echo $comment['commentsjob']; ?></span>
                        </div>
                        <p class="comment-content">
                            <?php echo $comment['commentscontent']; ?>
                        </p>

                    </a>
                </li>
            <?php endforeach; ?>
                
            </ul>
           
        </div>
    </section>

    <?php get_template_part('template-parts/schedule'); ?>

    <?php get_footer(); ?>