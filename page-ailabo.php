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
                    <h2>AIコンサルタントLabo株式会社 <br class="sp">コーポレートサイト</h2>
                    <div class="container">
                        <div class="imgBox">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/AI-top.png'); ?>" alt="サイト全体" />
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/AI-business.png'); ?>" alt="aboutページ" />
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/AI-sp.png'); ?>" alt="sp" />
                        </div>
                        <div class="textBox">
                            <p>
                                生成AI活用で企業の業務改革を実現するコンサルティング企業、AIコンサルタントLabo株式会社様のコーポレートサイトです。デザイン～コーディングまで担当致しました。
                            </p>
                            <p>
                                余白を意識し、シンプルで見やすいデザインを心掛けました。
                            </p>
                            <p>
                                サイト公開後にクライアント様でサイト内の画像を変更したいとのご要望があり、作業のしやすさを意識したカスタムフィールドを設置致しました。
                            </p>
                        </div>
                        <!-- /.textBox -->
                        <div class="buttonBox">
                            <button><a href="<?php echo home_url('/'); ?>">トップへ</a></button>
                            <button><a href="<?php echo esc_url('https://ai-labo.co.jp/'); ?>" target="_blank">サイトを見る</a></button>
                        </div>
                    </div><!-- /.container -->
                </div><!-- /sitePageInner -->
                <!-- sora-pageInner -->
            </div>
        </main>

        <?php get_footer(); ?>