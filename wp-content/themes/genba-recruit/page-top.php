<?php
/**
 * Template Name: トップページ
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <header class="entry-header">
          <div class="movie-box">
            <div id="movie" class="movie"></div>
          </div>
        </header><!-- .entry-header -->


        <div class="top-content">

          <div class="top-spesial-box box-center">
            <div class="top-spesial-box-img">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_theme_file_uri(); ?>/images/special/bnr01.png" alt="採用スペシャルコンテンツ「ゲンサポクエスト〜現サポに就職して勇者をめざす！〜」">
              </a>
            </div>
            <div class="top-spesial-box-txt">
              <h2 class="box-ttl">採用スペシャルコンテンツ<br>
                「ゲンサポクエスト〜現サポに就職して勇者をめざす！〜」</h2>
              <p>
                勇者とは、みずからの意思を持ち、仲間とともに高みをめざすもの。<br>
                「社員は仲間」であり、全員で学ぶのが現場サポート！<br>
                そんな弊社で一緒に働いてみたいという方のエントリーをお待ちしています！
              </p>
            </div>
            <div class="top-spesial-box-btn btn">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                スペシャルコンテンツへ
              </a>
            </div>
          </div>

          <div class="top1 top-box box-odd">
            <h2 class="box-ttl">建設現場をサービスと人でサポートしています。</h2>
            <div class="box-2">
              <div class="box-child">
                <div class="box-child-img">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>about">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/about/img_about01-03.png" alt="現場サポートとは">
                  </a>
                </div>
              </div>
              <div class="box-child">
                <div class="box-child-txt">
                  <p>
                    私たちは、全国の建設業に携わる方の、コミュニケーションを通じたチームワークの向上、働き方の改革、業務の効率化をサポートしています。
                  </p>
                </div>
              </div>
            </div>
            <div class="box-btn btn box-center">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>about">
                現場サポートとは
              </a>
            </div>
          </div>

          <div class="top2 top-box box-even">
            <h2 class="box-ttl">さらに新しい価値観へ</h2>
            <div class="box-2">
              <div class="box-child">
                <div class="box-child-img">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>job">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/job/img_job01-02.png" alt="現場サポートの仕事">
                  </a>
                </div>
              </div>
              <div class="box-child">
                <div class="box-child-txt">
                  <p>
                    私たちのサービスは、建設業の皆様のニーズに合わせて何度も変化を繰り返してきました。<br>
                    それは、サービスそのものを提供するのではなく、サービスを導入した先にある価値をお客様にお届けしていると考えているからです。<br>
                    私たちは、常にお客様に必要とされるものを読み取り、お客様の現場にどのような価値をお届けできるかを考えています。
                  </p>
                </div>
              </div>
            </div>
            <div class="box-btn btn box-center">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>job">
                現場サポートの仕事
              </a>
            </div>
          </div>

          <div class="top3 top-box box-odd">
            <h2 class="box-ttl">ひとりひとりがプロフェッショナル</h2>
            <div class="box-2">
              <div class="box-child">
                <div class="box-childimg">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>step">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/step/img_step01.png" alt="入社後のステップ">
                  </a>
                </div>
              </div>
              <div class="box-child">
                <div class="box-child-txt">
                  <p>
                    現場サポートの教育の特徴は「共育ち型」です。<br>
                    ひとりひとりの成長を社員全員がサポートし、専門分野のプロフェッショナルやリーダーを育成します。<br>
                    ひとりひとりのキャリアに沿った研修プランが用意されています。
                  </p>
                </div>
              </div>
            </div>
            <div class="tbox-btn btn box-center">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>step">
                入社後のステップ
              </a>
            </div>
          </div>

          <div class="top4 top-box box-even">
              <h2 id="interview" class="box-ttl">メンバーインタビュー</h2>
            <?php get_template_part('inc/list','member'); ?>
          </div>

          <div class="top5 top-box box-odd">
            <?php get_template_part('inc/box','talk'); ?>
          </div>

          <div class="top6 top-box box-even">
            <div class="box-2">
              <div class="box-child box-child-40">
                <div class="box-child-img">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>member/message">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/member/img_message.jpg" alt="代表メッセージ">
                  </a>
                </div>
              </div>
              <div class="box-child box-child-60">
                <div class="box-child-txt">
                  <h2 class="box-ttl">私たちと一緒に事業を通じて、 お客様や地域社会に貢献したい意欲のある仲間を求めています。</h2>
                  <p>
                    就活も仕事も行動無くして結果はありません。<br>
                    合同説明会・単独説明会・OB訪問・単独訪問等、門戸は常に開いています。<br>
                    是非、お気軽にコンタクトしてみてください。お会いできる事を楽しみにしています。
                  </p>
                  <div class="box-btn btn">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>member/message">
                      代表メッセージ
                    </a>
                  </div>
                </div>
            </div>
          </div>
        </div>


       </div><!-- .top-content -->



      </article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
