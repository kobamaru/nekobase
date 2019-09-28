<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head prefix="og: http://ogp.me/ns#">
	<meta charset="UTF-8">
<?php if(is_tag() || is_date() || is_search() || is_404()) : ?>
	<meta name="robots" content="noindex"/>
<?php endif; ?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?><">
	<meta property="og:locale" content="ja_JP">
	<meta name="theme-color" content="#c3d1d9">
	<link rel="canonical" href="https://nekobase.com/">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@nekobaseblog" />

<?php if( is_single() || is_page() ): ?>
	<title><?php the_title(); ?></title>
	<meta name="description" content="<?php echo strip_tags( get_the_excerpt() ); ?>">
	<meta property="og:type" content="article">
	<meta property="og:title" content="<?php the_title(); ?>">
	<meta name="twitter:title" content="<?php the_title(); ?>">
	<meta property="og:url" content="<?php the_permalink(); ?>">
	<meta property="og:description" content="<?php echo strip_tags( get_the_excerpt() ); ?>">
	<meta name="twitter:description" content="<?php echo strip_tags( get_the_excerpt() ); ?>">
	<?php if( has_post_thumbnail() ): ?>
		<?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
		<meta property="og:image" content="<?php echo $postthumb[0]; ?>">
		<meta property="og:image:width" content="670" />
		<meta property="og:image:height" content="400" />
		<meta name="twitter:image" content="<?php echo $postthumb[0]; ?>">
	<?php endif; ?>
<?php else: ?>
	<title><?php bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
	<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?>">
<?php
$http = is_ssl() ? 'https' . '://' : 'http' . '://';
$url = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>
	<meta property="og:url" content="<?php echo $url; ?>">
	<meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="twitter:description" content="<?php bloginfo( 'description' ); ?>">
	<meta property="og:image" content="<?php echo esc_url( home_url( '/' ) ); ?>assets/images/ogp.png">
	<meta name="twitter:image" content="<?php echo esc_url( home_url( '/' ) ); ?>assets/images/ogp.png">
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
<?php endif; ?>

	<link rel="shortcut icon" href="/favicon.ico">
	<link href="/apple-touch-icon.png" rel="apple-touch-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link href="/assets/css/lib.css" rel="stylesheet" media="all">
	<link href="/assets/css/common.css" rel="stylesheet" media="all">
	<script src="/assets/js/lib.js"></script>
	<script src="/assets/js/common.js"></script>
	<script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WT6L7BV');</script>
<!-- End Google Tag Manager -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6437110045206016",
    enable_page_level_ads: true
  });
</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT6L7BV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="l-header">
	<div class="l-header_inner">
		<h1 class="tit-logo"><a href="<?php echo home_url(); ?>"><img src="/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="full-image"></a></h1>
	</div>
<?php wp_nav_menu( array(
	'theme_location' => 'l-nav',
	'container' => 'nav',
	'container_class' => 'l-nav',
	'fallback_cb' => ''
) ); ?>
</header>