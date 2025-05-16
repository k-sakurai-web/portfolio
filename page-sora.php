<?php get_header(); ?>

<body>
    <!-- body-inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" class="sitePage">
            <div class="header-inner wrapper">
                <!--Logo-->
                <h1><a id="logo" href="<?php echo home_url('/'); ?>">K's Portfolio</a></h1>
                <!--End: Logo-->
                <!--Navigation-->
                <div id="mainMenu">
                    <div class="container">
                        <div id="toContact">
                            <a href="<?php echo home_url('/index.html#contact'); ?>">CONTACT</a>
                        </div>
                        <!-- /#contact -->
                    </div>
                </div>
            </div>
        </header>
        <!-- end: Header -->
        <main>
            <!--  sitePage -->
            <div id="co-site" class="sitePage">
                <div class="sitePageInner wrapper">
                    <h2>ソラエナジー株式会社<br class="sp">コーポレートサイト</h2>
                    <div class="container">
                        <div class="imgBox">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/sora-all-view.png'); ?>" alt="サイト全体" />
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/sora-about.png'); ?>" alt="aboutページ" />
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/sora-sp.png'); ?>" alt="sp" />
                        </div>
                        <div class="textBox">
                            <p>
                                再生可能エネルギー事業を行う架空の会社、ソラエナジー株式会社のコーポレートサイトです。<br>デザイン～コーディングまで担当致しました。
                            </p>
                            <p>
                                サブページはレイアウトを統一し、見やすいデザインを心掛けました。ページ下部のメッセージは、印象を与えられるようなアニメーションを実装致しました。
                            </p>
                            <p>
                                wordpress化するにあたり、セキュリティを意識したコンタクトフォームを実装しています。
                            </p>
                        </div>
                        <!-- /.textBox -->
                        <div class="buttonBox">
                            <button><a href="<?php echo home_url('/'); ?>">トップへ</a></button>
                            <button><a href="<?php echo esc_url('https://kotameshi.xsrv.jp/'); ?>" target="_blank">サイトを見る</a></button>
                        </div>
                    </div><!-- /.container -->
                </div><!-- /sitePageInner -->
                <!-- sora-pageInner -->
            </div>
        </main>

        <?php get_footer(); ?>