<div class="member-content">
<div class="member1 member-box">
  <h2 class="box-ttl">代表メッセージ</h2>
  <div class="box-img img1-box ">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>member/message">
      <img src="<?php echo get_theme_file_uri(); ?>/images/member/btn_message.jpg" alt="代表取締役・福留 進一からのメッセージ">
    </a>
    <div class="box-img-txt">
      <p class="box-img-ttl">私たちと一緒に事業を通じて、お客様や地域社会に貢献したい意欲のある仲間を求めています。</p>
      <p class="box-img-name">代表取締役　福留 進一</p>
      <div class="box-img-btn btn">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>member/message">代表メッセージ</a>
      </div>
    </div>
  </div>
</div>

<div class="member2 member-box">
    <h2 id="interview" class="box-ttl">メンバーインタビュー</h2>
  <?php get_template_part('inc/list','member'); ?>
</div>

<div class="member3 member-box">
  <?php get_template_part('inc/box','talk'); ?>
</div>

</div>
