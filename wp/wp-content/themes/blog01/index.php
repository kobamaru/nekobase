<?php get_header(); ?>

<main class="l-main">

	<div class="box-art_lst">
		<!--article-->
		<div class="blc-hdg01">
			<h2 class="ttl-hdg01"><span class="ttl-wrap">Article</span></h2>
		</div>

<?php if(is_category() || is_tag()): ?>
	<h1 class="mb20 left"><strong><?php single_cat_title() ?>の記事一覧</strong></h1>
<?php elseif(is_year()): ?>
	<h1 class="mb20 left"><strong><?php the_time("Y年") ?>の記事一覧</strong></h1>
<?php elseif(is_month()): ?>
	<h1 class="mb20 left"><strong><?php the_time("Y年m月") ?>の記事一覧</strong></h1>
<?php endif; ?>

		<div class="blc-art_lst">

<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<article class="blc-art_clm">
				<a href="<?php the_permalink(); ?>">
<?php if( has_post_thumbnail() ): ?>
					<span class="blc-art_photo">
	<?php the_post_thumbnail('full'); ?>
					</span>
<?php else: ?>
					<span class="blc-art_photo">
						<img src="/assets/images/noimg.png" alt="no-img" class="full-image" />
					</span>
<?php endif; ?>
					<span class="blc-art_dt">
						<span class="blc-art_ttl"><?php the_title(); ?></span>
						<span class="blc-art_txt"><?php the_excerpt(); ?><span class="blc-art_more">つづきを読む</span></span>
						<span class="blc-cat"><?php if( has_category() ): ?><?php $postcat=get_the_category(); echo $postcat[0]->name; ?>：<?php endif; ?><span><time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time></span></span>
					</span>
					
					<?php is_new_icon(); ?>
				</a>
			</article>

<?php endwhile; endif; ?>

		</div>
		<!--/article-->

		<div class="blc-art_pager">
			<?php echo paginate_links( array(
				'type' => 'list',
				'mid_size' => '1',
				'prev_text' => '<i class="fas fa-angle-left"></i>',
				'next_text' => '<i class="fas fa-angle-right"></i>'
			) ); ?>
		</div>
	</div>

<?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>
