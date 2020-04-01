<?php
/**
 * Template Name: エンジニア「働き方」対談
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
          <div class="entry-header-img">
          </div>
          <h1 class="entry-title">エンジニア「働き方」対談</h1>
        </header><!-- .entry-header -->

        <?php get_template_part( 'inc/breadcrumb'); ?>

        <div class="talk-profile">
          <div class="talk-excerpt">
            <p>自社で企画・開発・販売・サポートまで一貫して行う現場サポート。<br>
              そんな現場サポートで働くエンジニアのみなさんに現場サポートで働くことについてざっくばらんにフリートークしてもらいました。</p>
          </div>
          <div class="talk-profile-card">
            <div class="talk-profile-card-item talk-profile-card-item01">
              <div class="talk-profile-card-item-img">
                <img src="<?php echo get_theme_file_uri(); ?>/images/member/talk01/prof01.jpg" alt="ベテランエンジニアUさん">
              </div>
              <div class="talk-profile-card-item-content">
                <p class="talk-profile-card-item-name">ベテランエンジニアUさん</p>
                <p class="talk-profile-card-item-txt">学校ではハードウェア中心に学び、卒業後は東京の大手独立系ソフトウェア会社に勤務。その後、知人と二人で会社を立ち上げ、ソフト開発を３年ほど行う。インターネット関連のエンジニアに興味を持っていたところ、自社サービスでビジネスをしている現場サポートに縁があり、入社。現在入社4年目。</p>
              </div>
            </div>
            <div class="talk-profile-card-item talk-profile-card-item02">
              <div class="talk-profile-card-item-img">
                <img src="<?php echo get_theme_file_uri(); ?>/images/member/talk01/prof02.jpg" alt="若手エンジニア Fさん">
              </div>
              <div class="talk-profile-card-item-content">
                <p class="talk-profile-card-item-name">若手エンジニア Fさん</p>
                <p class="talk-profile-card-item-txt">新卒で現場サポートに入社し、2年目。<br>学校では電子制御学を学んだが、プログラミングの授業で面白さを発見し、情報系の会社を志す。学校のインターンシップ案内で現場サポートを知り、色々な仕事業務があることに興味を持ち、入社。現在では地盤関係のシステムの開発に携わっている。</p>
              </div>
            </div>
            <div class="talk-profile-card-item talk-profile-card-item03">
              <div class="talk-profile-card-item-img">
                <img src="<?php echo get_theme_file_uri(); ?>/images/member/talk01/prof03.jpg" alt="ディレクター Yさん">
              </div>
              <div class="talk-profile-card-item-content">
                <p class="talk-profile-card-item-name">ディレクター Yさん</p>
                <p class="talk-profile-card-item-txt">大学で工学システムを学び、卒業後独立系の大手SIerに入社。新規ビジネス事業のディレクションや大規模なシステムの開発・運営をする部署で新プロダクト企画、システム更改プロジェクトに携わる。現場サポートでも同様に、開発メンバーと常に密接にやりとりを行い、ビジネス的な側面を見ながらディレクションを行っている。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="talk-index-ttl">
          <h2>エンジニア「働き方」対談</h2>
        </div>
        <div class="talk-index">
          <?php if(is_page('talk01')) { ?>
          <div class="talk-index-item current">
          <?php } else { ?>
          <div class="talk-index-item">
          <?php } ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>member/talk01#talk-content">
            <span class="talk-index-num">1</span>
            <span class="talk-index-txt">エンジニアになろうと思ったのは偶然。<br>ソフトウェアエンジニアが世界征服をする映画をみた、そんなきっかけ。</span>
            </a>
          </div>
          <?php if(is_page('talk01-2')) { ?>
          <div class="talk-index-item current">
          <?php } else { ?>
          <div class="talk-index-item">
          <?php } ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>member/talk01-2#talk-content">
            <span class="talk-index-num">2</span>
            <span class="talk-index-txt">年齢じゃない。エンジニアは楽しめているかどうか。</span>
            </a>
          </div>
          <?php if(is_page('talk01-3')) { ?>
          <div class="talk-index-item current">
          <?php } else { ?>
          <div class="talk-index-item">
          <?php } ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>member/talk01-3#talk-content">
            <span class="talk-index-num">3</span>
            <span class="talk-index-txt">自分の意見を伝えることが求められる。<br>
              みんな一緒の目的に対して何がベストかというのを受け入れてやっていく。</span>
            </a>
          </div>
        </div>

        <div id="talk-content" class="talk-content">
          <?php
          while ( have_posts() ) : the_post();
          the_content();
          endwhile;
          ?>
        </div>

        <div class="talk-index-ttl">
          <h2>エンジニア「働き方」対談</h2>
        </div>
        <div class="talk-index">
          <?php if(is_page('talk01')) { ?>
          <div class="talk-index-item current">
          <?php } else { ?>
          <div class="talk-index-item">
          <?php } ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>member/talk01#talk-content">
            <span class="talk-index-num">1</span>
            <span class="talk-index-txt">エンジニアになろうと思ったのは偶然。<br>ソフトウェアエンジニアが世界征服をする映画をみた、そんなきっかけ。</span>
            </a>
          </div>
          <?php if(is_page('talk01-2')) { ?>
          <div class="talk-index-item current">
          <?php } else { ?>
          <div class="talk-index-item">
          <?php } ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>member/talk01-2#talk-content">
            <span class="talk-index-num">2</span>
            <span class="talk-index-txt">年齢じゃない。エンジニアは楽しめているかどうか。</span>
            </a>
          </div>
          <?php if(is_page('talk01-3')) { ?>
          <div class="talk-index-item current">
          <?php } else { ?>
          <div class="talk-index-item">
          <?php } ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>member/talk01-3#talk-content">
            <span class="talk-index-num">3</span>
            <span class="talk-index-txt">自分の意見を伝えることが求められる。<br>
              みんな一緒の目的に対して何がベストかというのを受け入れてやっていく。</span>
            </a>
          </div>
        </div>

      </article><!-- #post-## -->

    <?php get_template_part('inc/list-member'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
