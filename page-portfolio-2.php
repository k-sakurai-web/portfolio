<<<<<<< HEAD
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
            <div id="site" class="sitePage">
                <div class="sitePageInner wrapper">
                    <h2>ポートフォリオサイト</h2>
                    <div class="container">
                        <div class="imgBox">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/portfolio-all-view.png'); ?>" alt="サイト全体" />
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/portfolio-sp.png'); ?>" alt="sp" />
                        </div>
                        <div class="textBox">
                            <p>
                                自身のポートフォリオサイトです。<br />デザイン～コーディングまで担当致しました。
                            </p>
                            <p>
                                見やすいレイアウトを意識しつつ、アニメーションを取り入れ視覚効果を工夫致しました。
                            </p>
                            <p>
                                SEOを意識し、きれいなマークアップを心掛けました。
                            </p>
                        </div>
                        <!-- /.textBox -->
                        <div class="buttonBox">
                            <button><a href="<?php echo home_url('/'); ?>">トップへ</a></button>
                            <button><a href="<?php echo home_url('/'); ?>">サイトを見る</a></button>
                        </div>
                    </div><!-- /.container -->
                </div><!-- /sitePageInner -->
                <!-- sora-pageInner -->
            </div>
        </main>

=======
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
            <div id="site" class="sitePage">
                <div class="sitePageInner wrapper">
                    <h2>ポートフォリオサイト</h2>
                    <div class="container">
                        <div class="imgBox">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/portfolio-all-view.png'); ?>" alt="サイト全体" />
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/portfolio-sp.png'); ?>" alt="sp" />
                        </div>
                        <div class="textBox">
                            <p>
                                自身のポートフォリオサイトです。<br />デザイン～コーディングまで担当致しました。
                            </p>
                            <p>
                                見やすいレイアウトを意識しつつ、アニメーションを取り入れ視覚効果を工夫致しました。
                            </p>
                            <p>
                                SEOを意識し、きれいなマークアップを心掛けました。
                            </p>
                        </div>
                        <!-- /.textBox -->
                        <div class="buttonBox">
                            <button><a href="<?php echo home_url('/'); ?>">トップへ</a></button>
                            <button><a href="<?php echo home_url('/'); ?>">サイトを見る</a></button>
                        </div>
                    </div><!-- /.container -->
                </div><!-- /sitePageInner -->
                <!-- sora-pageInner -->
            </div>
        </main>

>>>>>>> 296d5c09c9fc7997bec786386d8364309e6e645e
        <?php get_footer(); ?>