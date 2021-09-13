<?php get_header(); ?>
<?php get_template_part('template-parts/header');?>
</div>

    <!-- breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
        <?php get_template_part('template-parts/breadcrumb'); ?>
        </div>
    </div><!-- /breadcrumb -->

    <section class="cast">
        <div class="bg"></div>
        <div class="container wow fadeIn">
            <h2 class="section-title">CAST</h2>
            <div class="cast-wrapper">
            <?php 
            $cast_main = SCF::get('cast_mainfield');
            foreach ($cast_main as $cast):
            ?>
                <div class="cast-contents wow fadeIn">
                    <div class="cast-image">
                        <?php echo wp_get_attachment_image($cast['castimage'], 'medium') ?>
                    </div>
                    <div class="cast-above">
                        <p class="cast-role"><?php echo $cast['castrole']; ?></p>
                        <p class="cast-name"><?php echo $cast['castname']; ?></p>
                        <?php if($cast['castjob']!==""): ?>
                        <span class="cast-job"><?php echo $cast['castjob']; ?></span>
                        <?php else: ?>
                            <br>
                        <?php endif;?>

                    </div>
                    <div class="cast-under">
                        <p class="description">
                        
                        <?php echo nl2br($cast['castdescription']); ?>
                        </p>
                    </div>
                </div>
            <?php 
            endforeach;
            ?>
           
        </div>

    </section>

    <div class="cast-table-first">
        <div class="container ">
            <ul class="cast-table-grid">
            <?php 
            $cast_second = SCF::get('cast_secondfield');
            foreach ($cast_second as $cast):
            ?>
                <li class="cast-grid-item wow fadeIn">
                    <div class="cast-item-left">
                        <?php echo wp_get_attachment_image($cast['castsecondimage'], 'large'); ?>
                    </div>
                    <div class="cast-item-right">
                        <span class="cast-item-role"><?php echo $cast['castsecondrole']; ?></span>
                        <p class="cast-item-name"><?php echo $cast['castsecondname']; ?></p>
                        <span class="cast-job">（<?php echo $cast['castsecondjob']; ?>）</span>
                        <p class="cast-item-content">
                        <?php echo nl2br($cast['castseconddescription']); ?>
                        </p>
                    </div>
                </li>
                <?php endforeach; ?>
                
            </ul>
        </div>
    </div>

    <div class="cast-table-second">
        <div class="container">
            <ul class="cast-grid">
                <?php 
                $cast_third = SCF::get('cast_thirdfield'); 
                foreach($cast_third as $cast):
                ?>
                <li class="cast-grid-item wow fadeIn">
                    <span class="cast-role"><?php echo $cast['castthirdrole'];?></span>
                    <p class="cast-name"><?php echo $cast['castthirdname']; ?></p>
                    <?php if($cast['castthirdjob']!==""): ?>
                        <p class="cast-job">(<?php echo $cast['castthirdjob'] ;?>)</p>
                    <?php else: ?>
                        <br>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
                
            </ul>
        </div>
    </div>



    <?php get_template_part('template-parts/schedule'); ?>

    <?php get_footer(); ?>