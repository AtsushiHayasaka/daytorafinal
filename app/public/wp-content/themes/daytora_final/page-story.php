<?php get_header(); ?>

<body>
    <div class="header-bg">

        <header>
            <div class="container">
                <nav>
                <?php
                    wp_nav_menu(
                        //.header-listを置き換えて、PC用メニューを動的に表示する
                        array(
                            'depth' => 1,
                            'theme_location' => 'global', //グローバルメニューをここに表示すると指定
                            'container' => 'false',
                            'menu_class' => 'header-list',
                        )
                    );
                    ?>
                </nav>

                <div class="drawer drawer--right only-sp">
                    <div role="banner">
                        <!-- ハンバーガーボタン -->
                        <button type="button" class="drawer-toggle drawer-hamburger">
                            <div class="navbar_toggle hamburger-icon">
                                <span class="navbar_toggle_icon"></span>
                                <span class="navbar_toggle_icon"></span>
                                <span class="navbar_toggle_icon"></span>
                            </div>
                        </button>
                        <!-- ナビゲーションの中身 -->
                        <nav class="drawer-nav" role="navigation">
                            
                            <?php
                    wp_nav_menu(
                        //.header-listを置き換えて、PC用メニューを動的に表示する
                        array(
                            'depth' => 1,
                            'theme_location' => 'drawer', //グローバルメニューをここに表示すると指定
                            'container' => 'false',
                            'menu_class' => 'drawer-menu',
                        )
                    );
                    ?>
                              
                            
                        </nav>
                    </div>
                    <main role="main">
                        <!-- Page content -->
                    </main>
                </div>
            </div>
        </header>
    </div>
    <div class="top-story-bg">
        <section class="top">
            <!-- top -->
            <div class="top-container">
                <div class="top-title-wrapper">
                    <img src="<?php echo get_template_directory_uri();?>/image/titlename.png" alt="">
                </div>
                <div class="date-place-button">
                    <div class="date-place">
                        <img src="<?php echo get_template_directory_uri();?>/image/date_place.png" alt="">
                    </div>
                    <div class="top-button-area">
                    <button type="button" class="move_book" onclick="location.href='<?php the_field('book_ticket') ?>'" >チケット予約サイトへ</button>
                    </div>
                </div>
            </div>

        </section>

        <!-- breadcrumb -->
        <div class="breadcrumb">
            <div class="container">
            <?php get_template_part('template-parts/breadcrumb'); ?>
            </div>
        </div><!-- /breadcrumb -->

        <section class="story">
            <!-- story -->
            <div class="container">
                <h2 class="section-title">STORY</h2>
                <div class="story-first-wrapper wow fadeIn">
                    <h3 class="story-title">子見出し</h3>
                    <p class="story-content content-right">
                        マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
                        世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
                    </p>
                </div>
        </section><!-- /story -->

    </div>
    </div>
    <?php 
    $stories = SCF::get('story_wrapper');
    if (!empty($stories)):
    foreach($stories as $story):
    ?>
    <div style="background-image: url(<?php echo wp_get_attachment_image_url($story['storyimage'],'full');?>" class="story-wrapper ">
        <!-- storysecond -->
        <div class="container">
            <p class="story-content content-left wow fadeIn">
                <?php echo $story['storycontent']; ?>
            </p>

        </div>
    </div><!-- /storysecond -->
    <?php
    endforeach;
    endif;
    ?>

    <?php get_template_part('template-parts/schedule'); ?>

    <?php get_footer(); ?>