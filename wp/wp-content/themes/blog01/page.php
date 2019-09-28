<?php get_header(); ?>

<main class="l-main">

<?php if(have_posts()): the_post(); ?>
	<!--article-->
	<article <?php post_class( 'blc-art' ); ?>>
		<div class="blc-art_dd">

			<h1 class="ttl-hdg01"><span class="ttl-wrap"><?php the_title(); ?></span></h1>
<?php the_content(); ?>

		</div>
	</article>
	<!--/article-->

<?php endif; ?>

<?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>
