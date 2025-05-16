<?php get_header(); ?>

<body>
  <!-- body-inner -->
  <div class="body-inner">
    <!-- Header -->
    <header id="header">
      <div class="header-inner wrapper">
        <!--Logo-->
        <h1><a id="logo" href="<?php echo home_url('/'); ?>">K's Portfolio</a></h1>
        <!--End: Logo-->
        <!--Navigation-->
        <div id="mainMenu">
          <div class="container">
            <div id="toContact">
              <a href="#contact">CONTACT</a>
            </div>
            <!-- /#contact -->
          </div>
        </div>
      </div>
    </header>
    <!-- end: Header -->
    <main>
      <div id="topView">
        <div class="topInner">
          <div class="inspiro-slider">
            <div id="topviewSentence">
              <div class="fadeInDown">
                <span>Create</span>
              </div>
              <div class="fadeInRight">
                <span>Your</span>
              </div>
              <div class="fadeInLeft">
                <span>Awesome</span>
              </div>
              <div class="fadeInUp">
                <span>Website</span>
              </div>
              <picture class="fadeInTop">
                <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/topMessageSp.svg'); ?>" media="(max-width: 1000px)" alt="topMessageSp" />
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/topMessage.svg'); ?>" alt="topMessage" />
              </picture>
            </div>
          </div>
          <!-- スクロール誘導 -->
          <div id="scrollIcon" class="text-container">・・・＞</div>
          <!-- /#scrollIcon -->
        </div>
      </div>
      <!--  contents-page -->
      <div id="contents-page">
        <div class="contents-pageInner">
          <section id="about">
            <div class="about-inner wrapper">
              <h2 class="fadeIn">
                <div class="text-container">ABOUT</div>
              </h2>
              <div id="profile">
                <div class="profPic">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/img/portrate.jpg'); ?>" alt="プロフィール画像" />
                </div>
                <!--  profPic -->
                <div class="profText">
                  <span class="name">K Sakurai</span>
                  <p class="jp">
                    埼玉県在住。2023年よりWeb製作を開始し、飲食店や工務店などの個人店様、中小企業のお客様向けに、HP(ホームページ)やLP(ランディングページ)を作成しております。HTML,CSS,JavaScript(jQuery),WordPressを使用したサイト制作が可能です。<br />
                    舞台機構のメンテナンス会社に16年以上勤務している経験から培った責任感、洞察力やコミュニケーション能力を活かし、クライアント様の意向を汲み取り丁寧な仕事をすることを心がけています。
                  </p>
                  <span class="duties">業務内容</span>
                  <ul>
                    <li>HP制作(HTML,CSS,JavaScript)</li>
                    <li>HP制作(WordPress)</li>
                    <li>LP制作(HTML,CSS,JavaScript)</li>
                    <li>LP制作(WordPress)</li>
                    <li>ブログ制作(WordPress)</li>
                    <li>フライヤー制作(Figma)</li>
                  </ul>
                </div>
                <!--  profText -->
              </div>
              <!--  /profile -->
            </div>
            <div class="messageBox">
              <ul class="msgSlick">
                <li class="slickItem">Create Your Awesome Website</li>
                <li class="slickItem">Create Your Awesome Website</li>
              </ul>
              <!--  .msgSlick -->
            </div>
            <!-- /#messageBox -->
          </section>
          <!--  ?#about -->
          <section id="skill">
            <div class="skill-inner wrapper">
              <h2 class="fadeIn">
                <div class="text-container">SKILL</div>
              </h2>
              <div class="icon-list fadeIn2">
                <div class="imgBox">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/img/icons8-html-144.png'); ?>" alt="html" />
                  <h3>HTML</h3>
                  <p>SEOを意識したコーディングを行います。</p>
                </div>
                <div class="imgBox">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/img/icons8-css-144.png'); ?>" alt="css" />
                  <h3>CSS</h3>
                  <p>
                    デザインの再現のほか、アニメーションの実装にも対応致します。
                  </p>
                </div>
                <div class="imgBox">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/img/icons8-javascript-144.png'); ?>" alt="javascript" />
                  <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/img/icons8-jquery-is-a-javascript-library-designed-to-simplify-html-96.png'); ?>"
                    alt="jquery" />
                  <h3>JavaScript<br class="sp" />(jQuery)</h3>
                  <p>
                    ハンバーガーメニュー、スライダー、モーダル等、動的なサイト制作にも対応致します。
                  </p>
                </div>
                <div class="imgBox">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/img/icons8-ワードプレス-144.png'); ?>"
                    alt="wordpress" />
                  <h3>WordPress</h3>
                  <p>
                    オリジナルテーマ構築、問い合わせフォームの設置もお任せください。
                  </p>
                </div>
                <div class="imgBox">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/img/figma.png'); ?>" alt="figma" />
                  <h3>Figma</h3>
                  <p>
                    ワイヤーフレーム制作からデザインカンプ制作まで承ります。
                  </p>
                </div>
              </div>
            </div>
            <!-- /.skill-inner -->
          </section>
          <!-- /#skill -->
          <section id="works">
            <div class="worksInner wrapper">
              <h2 class="fadeIn">
                <div class="text-container">WORKS</div>
              </h2>
              <ul class="worksList fadeIn2">
                <div class="thumbnail">
                  <li>
                    <a href="<?php echo esc_url(home_url('/lamai')); ?>">
                      <span class="label site">店舗ウェブサイト</span>
                      <div class="imgBox">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/lamai.png'); ?>" alt="LAMAI" />
                        <div class="hover-mask">
                          <p>view More</p>
                        </div>
                        <!-- /.hover-mask -->
                      </div>
                      <p class="site-title">LAMAI様</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url(home_url('/sora')); ?>">
                      <span class="label co-site">コーポレートサイト</span>
                      <div class="imgBox">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/sora.png'); ?>" alt="ソラエナジー株式会社" />
                        <div class="hover-mask">
                          <p>view More</p>
                        </div>
                        <!-- /.hover-mask -->
                      </div>
                      <p class="site-title">ソラエナジー株式会社</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url(home_url('/kagawa')); ?>">
                      <span class="label lp">LP</span>
                      <div class="imgBox">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/kagawa.png'); ?>" alt="カガワ建装様" />
                        <div class="hover-mask">
                          <p>view More</p>
                        </div>
                        <!-- /.hover-mask -->
                      </div>
                      <p class="site-title">カガワ建装様</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url(home_url('/ailabo')); ?>">
                      <span class="label co-site">コーポレートサイト</span>
                      <div class="imgBox">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/ai-labo.png'); ?>" alt="AIコンサルタントLabo株式会社" />
                        <div class="hover-mask">
                          <p>view More</p>
                        </div>
                        <!-- /.hover-mask -->
                      </div>
                      <p class="site-title">AIコンサルタントLabo株式会社</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url(home_url('/portfolio-2')); ?>">
                      <span class="label site">ポートフォリオ</span>
                      <div class="imgBox">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/portfolio.png'); ?>" alt="ポートフォリオサイト" />
                        <div class="hover-mask">
                          <p>view More</p>
                        </div>
                        <!-- /.hover-mask -->
                      </div>
                      <p class="site-title">ポートフォリオサイト</p>
                    </a>
                  </li>
                </div><!-- .thumbnail -->
              </ul>
            </div>
          </section>
          <!-- /#works -->
          <section id="contact">
            <div class="contactInner wrapper">
              <h2 class="fadeIn">
                <div class="text-container">CONTACT</div>
              </h2>
              <div class="contactForm fadeIn3">
                <?php echo apply_shortcodes('[contact-form-7 id="4a47412" title="コンタクトフォーム 1"]'); ?>
              </div>
              <!-- /.container-->
            </div>
            <!-- /.contactInner -->
          </section>
          <!-- /#contact -->
        </div>
      </div>
    </main>
    <?php get_footer(); ?>