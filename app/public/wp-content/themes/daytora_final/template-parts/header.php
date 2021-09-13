<body>
    <div class="big-bg">
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
        <?php
        if (is_front_page()) : ?>
            <?php get_template_part('template-parts/front-top'); ?>
        <?php else : ?>
            <?php get_template_part('template-parts/other-top'); ?>
        <?php endif; ?>