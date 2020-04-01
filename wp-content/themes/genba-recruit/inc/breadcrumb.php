<div class="breadcrumb">
<ul class="path" itemscope itemtype="http://schema.org/BreadcrumbList">
  <?php if(is_home()){ ?>
  <?php } else { ?>
  <li>
    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
      <a itemprop="item" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <span itemprop="name">HOME</span>
    </a>
    <meta itemprop="position" content="1" /></span>&gt;
  </li>
  <?php }
  if ( is_page() ) { ?>
    <?php if($post -> post_parent != 0 ) {
      $ancestors = array_reverse( $post-> ancestors );
      foreach($ancestors as $ancestor):  ?>
        <li>
          <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?php echo get_permalink($ancestor); ?>"><span itemprop="name"><?php echo get_the_title($ancestor); ?></span></a>
          <meta itemprop="position" content="2" /></span>&gt;
        </li>
      <?php endforeach; ?>
    <?php } ?>
    <li>
      <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <span itemprop="name"><?php wp_title(''); ?></span>
      <meta itemprop="position" content="3" /></span>
    </li>
    <?php } elseif ( is_singular('post') ) { ?>
      <li>
        <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?php echo esc_url( home_url( '/' ) ); ?>/category/info">
            <span itemprop="name">お知らせ</span>
          </a>
        <meta itemprop="position" content="2" /></span>&gt;
      </li>
      <li>
        <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <span itemprop="name"><?php wp_title(''); ?></span>
        <meta itemprop="position" content="3" /></span>
      </li>
      <?php } elseif ( is_singular('interview') ) { ?>
        <li>
          <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="<?php echo esc_url( home_url( '/' ) ); ?>member">
              <span itemprop="name">メンバーインタビュー</span>
            </a>
          <meta itemprop="position" content="2" /></span>&gt;
        </li>
        <li>
          <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span itemprop="name"><?php wp_title(''); ?></span>
          <meta itemprop="position" content="3" /></span>
        </li>
      <?php } elseif ( is_post_type_archive()) {
      	 	 $type = get_queried_object(); ?>
           <li>
             <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
               <span itemprop="name"><?php echo esc_attr($type->label); ?></span>
            <meta itemprop="position" content="2" /></span>
           </li>
  <?php } elseif ( is_page('message')) {
  	 	 $type = get_queried_object(); ?>
       <li>
         <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
             <a itemprop="item" href="<?php echo esc_url( home_url( '/' ) ); ?>member">
             <span itemprop="name">メンバーインタビュー</span>
           </a>
          <meta itemprop="position" content="2" /></span>&gt;
       </li>
       <li>
         <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
           <span itemprop="name"><?php echo esc_attr($type->label); ?></span>
        <meta itemprop="position" content="3" /></span>
       </li>
   <?php } elseif ( is_page('talk01','talk01-2','talk01-3') ) { ?>
     <li>
       <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
           <a itemprop="item" href="<?php echo esc_url( home_url( '/' ) ); ?>member">
           <span itemprop="name">メンバーインタビュー</span>
         </a>
      <meta itemprop="position" content="2" /></span>&gt;
     </li>
     <li>
       <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
         <span itemprop="name"><?php wp_title(''); ?></span>
        <meta itemprop="position" content="3" /></span>
     </li>
  <?php } elseif ( is_archive() ) { ?>
    <li>
      <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <span itemprop="name"><?php the_archive_title(); ?></span>
      <meta itemprop="position" content="2" /></span>
    </li>
  <?php } else {} ?>
</ul>
<!--/path-->
</div>
