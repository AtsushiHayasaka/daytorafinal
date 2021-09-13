<?php get_header(); ?>
<?php get_template_part('template-parts/header');?>


</div>
<section class="introduction">
    <div class="container">
        <div class="transparent_bg">
            <div class="intro-image wow fadeIn">
                <img src="<?php echo get_template_directory_uri(); ?>/image/introduction.png" alt="">
            </div>
            <div class="title-wrapper wow fadeIn">
                <h2 class="section-title">INTORODUTION</h2>
                <h3 class="intro-description">なぜ今「マハーバーラタ」なのか？</h3>
            </div>
            <div class="intro-contents-wrapper wow fadeIn">
                <p class="intro-content-left">
                    「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br class="intro_br">
                    それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br class="intro_br">
                    平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。
                </p>
                <p class="intro-content-right">
                    現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br class="intro_br">
                    神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br class="intro_br">
                    非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。

                </p>
            </div>
        </div>
    </div>

</section>

<section class="news">
    <div class="container">
        <h2 class="section-title wow fadeIn">
            NEWS
        </h2>


        <div class="news-item-wrapper wow fadeIn">
            <?php
            
            $new_posts = get_news_page(3, 'date');
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

        <div class="under-news-item-wrapper hidden-sp wow fadeIn">
            <?php
            $pickup_posts = get_news_page( 2, 'DESC', 'pickup')
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

<section class="story ">
    <div class="story-bg">
        <div class="container">
            <h2 class="section-title wow fadeIn">STORY</h2>
            <div class="story-content wow fadeIn">
                <p>マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。
                    世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
                </p>
            </div>
            <button onclick="location.href='http://daytorafinal.local/story/'" class="story-detail">もっと詳しく</button>
        </div>
    </div>
</section>

<section class="comments">
    <div class="container wow fadeIn">
        <h2 class="section-title">COMMENTS</h2>
        <p class="comments-description ">
            舞台関係者のみならず各界著名人から<br class="only-sp">コメントが届いています！
        </p>
        <div class="comments-contents hidden-sp">
            <p class=comment-name>京都佛立ミュージアム<br class="only-sp">館長<br class="only-sp"><span>長松清潤</span></p>
            <p class="comment-content hidden-sp">「文に非ず、其の義に非ず、唯だ一部の意のみ。」
                まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
            <button onclick="location.href='http://daytorafinal.local/comments/'" class="comment-detail">もっと見る</button>
        </div>

        <div class="comments-contents-sp only-sp">
            <div class="image-space"></div>
            <div class="comments-text">
                <p class=comment-job>京都佛立ミュージアム館長<br class="only-sp"></p>
                <p class="comment-name">長松清潤</p>
                <p class="comment-content">「文に非ず、其の義に非ず、唯だ一部の意のみ。」
                    まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
                <button onclick="location.href='http://daytorafinal.local/comments/" class="comment-detail">もっと見る</button>
            </div>
        </div>
    </div>
</section>

<section class="cast">
    <div class="bg"></div>
    <div class="container wow fadeIn">
    
        <h2 class="section-title">CAST</h2>
        <div class="cast-wrapper">
            <div class="cast-contents">
                <div class="cast-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/cast1.png" alt="">
                </div>
                <div class="cast-above">
                    <p class="cast-role">作・演出・振付・構成</p>
                    <p class="cast-name">小池博史</p>

                </div>
                <div class="cast-under">
                    <p class="description">
                        茨城県日立市出身。一橋大学卒業。<br>
                        演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。<br>
                        1982年「パパ・タラフマラ」設立。<br>
                        演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。<br>
                        3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。<br>
                        著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。
                    </p>
                </div>
            </div>

            <div class="cast-contents">
                <div class="cast-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/cast2.png" alt="">
                </div>
                <div class="cast-above">
                    <p class="cast-role">出演</p>
                    <p class="cast-name">白井ちさ子</p>
                    <span class="cast-job">(バレエ、コンテンポラリーダンス)</span>
                </div>
                <div class="cast-under">
                    <p class="description">
                        7歳よりクラシックバレエを始める。<br>
                        82年より6年間橘バレエ学校に在籍。<br>
                        牧阿佐美に師事。<br>
                        日本女子体育短期大学舞踊コース卒。<br>
                        在籍中、太田順造にパントマイムを師事。<br>
                        89年よりパパ・タラフマラに参加。<br>
                        以降国内外の公演に出演。<br>
                        後身のパフォーマーのダンス指導にもあっている。<br>
                        パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。<br>
                        これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。<br>

                    </p>
                </div>
            </div>

            <div class="cast-contents">
                <div class="cast-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/cast3.png" alt="">
                </div>
                <div class="cast-above">
                    <p class="cast-role">出演</p>
                    <p class="cast-name">小谷野哲郎</p>
                    <span class="cast-job">パリ舞踏</span>
                </div>
                <div class="cast-under">
                    <p class="description">
                        東海大学音楽学課程在学中よりサウンドスケープ研究の傍らバリ舞踊を始める。<br>
                        1995年よりインドネシア政府給費留学生としてインドネシア国立芸術高等学院に留学。<br>
                        学外でも現代バリ舞踊界最高の舞踊家達に師事し、舞踊技術と同時に精神的哲学的影響も強く受ける。<br>
                        2006年、Asian Cultural Councilの助成によりアメリカに滞在。<br>
                        パパ・タラフマラ作品では「ガリバー＆スウィフト」「パンク・ドンキホーテ」「白雪姫」に、小池博史ブリッジプロジェクトでは「注文の多い料理店」「風の又三郎」に出演。<br>
                </div>
            </div>
        </div>
        <div class="cast-button-area">
            <button onclick="location.href='http://daytorafinal.local/cast/'" class="cast-detail">もっと見る</button>
        </div>
    </div>

</section>

<?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>