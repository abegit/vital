<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title><?php wp_title('&raquo;','true','right'); ?></title>
  <?php $parent = $post->post_parent; ?>
  <?php $video = get_post_meta($post->ID, 'post_video', true );
  if($video != '') {
    $query_split = explode("//", $video); $query_splited = explode("/", $query_split[1]);
    $id = explode( 'watch?v=', $query_splited[1] );
    $twi_image = 'https://img.youtube.com/vi/'.$id[1].'/hqdefault.jpg';
    global $post;
    $text = 'Watch The Video';
  } else {
    $twi_image = wp_get_attachment_url(get_post_thumbnail_id());
    $excerpt = get_the_excerpt();
    $text = str_replace( '[&hellip;]', '&hellip;', strip_tags( $excerpt ) );
  }
  ?>
<meta itemscope itemtype="http://schema.org/Article" />
<meta itemprop="headline" content="<?php echo get_the_title( $parent ); ?>" />
<meta itemprop="description" content="<?php echo $text; ?>" />
<meta itemprop="image" content="<?php echo $twi_image; ?>" />
 
 <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" type="image/x-icon"> 
  <!-- CSS  -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?v=2.24.<?php echo rand(0,99); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/vital.css?v=2.24.<?php echo rand(0,99); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/social.css?v=2.24.<?php echo rand(0,99); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/danielbd.css?v=2.24.<?php echo rand(0,99); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji|Courgette|Satisfy|Sriracha" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Caveat|Satisfy|Montserrat:400,700|Kreon:400,700" rel="stylesheet">
  <?php wp_head(); ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@eliyahujian">
<meta name="twitter:title" content="VitalTransformation.com">
<meta name='twitter:description' content='<?php echo $text; ?>'>
<meta name="twitter:image" content="<?php echo $twi_image; ?>">
</head>
<body <?php body_class(); ?>>
          <?php /* Primary navigation */
        wp_nav_menu( array(
          'theme_location' => 'mobile',
          'container' => false,
          'menu_class' => 'side-nav',
          //Process nav menu using our custom nav walker
          'walker' => new wp_materialcss_navwalker())
        ); ?>
        <?php /* Primary navigation */
        wp_nav_menu( array(
          'theme_location' => 'mobile-search',
          'container' => false,
          'menu_class' => 'side-nav',
          //Process nav menu using our custom nav walker
          'walker' => new wp_materialcss_navwalker())
        ); ?>
  <div class="navbar-fixed">
    <nav class="transparent affix-top" role="navigation" data-spy="affix" data-offset-top="700">
    <div class="nav-wrapper container">
      <a id="logo-container" href="/" class="brand-logo">
        <i class="icon-vital-transformation"></i>
      </a>
      <!-- <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul> -->
      <?php /* Primary navigation */
        wp_nav_menu( array(
          'theme_location' => 'right',
          'container' => false,
          'menu_class' => 'right hide-on-med-and-down',
          //Process nav menu using our custom nav walker
          'walker' => new wp_materialcss_navwalker())
        ); ?>
        <?php /* Primary navigation */
        wp_nav_menu( array(
          'theme_location' => 'left',
          'container' => false,
          'menu_class' => 'left hide-on-med-and-down',
          //Process nav menu using our custom nav walker
          'walker' => new wp_materialcss_navwalker())
        ); ?>
        <!--<ul class="right">
          <li><?php//  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Search') ) : endif; ?></li> 
          <li><?php // get_search_form(); ?></li>
        </ul>-->

      <!-- <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul> -->
      <a href="#" data-activates="menu-mobile" class="button-collapse left"><i class="material-icons">menu</i></a>
      <!-- <a href="#" data-activates="menu-search" class="button-collapse right"><i class="material-icons">search</i></a> -->
      <a href="#" data-activates="menu-mobile-search" class="button-collapse right"><i class="material-icons">search</i></a>
    </div>
  </nav>
  </div>