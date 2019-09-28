<?php get_header(); ?>

<main class="l-main">

<?php if(have_posts()): the_post(); ?>
	<!--article-->
	<article <?php post_class( 'blc-art' ); ?>>

		<div class="blc-art_dd">
			<h1 class="ttl-hdg01 icn-<?php $category = get_the_category(); $category_nicename = $category[0]->category_nicename; echo $category_nicename; ?>"><span class="ttl-wrap"><?php the_title(); ?></span></h1>
			<p class="blc-cat"><?php if(has_category() ): ?><?php echo get_the_category_list( ' ' ); ?>：<?php endif; ?><span><time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time></span></p>
			<?php if( has_post_thumbnail() ): ?><p class="blc-art_dt_photo"><?php the_post_thumbnail( 'full' ); ?></p><?php endif; ?>

<?php the_content(); ?>

			<div class="blc-art_share">
				<ul>
					<li>
						<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&hashtags=ねこべーす" target="_blank"><i class="fab fa-twitter-square"></i></a>
					</li>
					<li>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
					</li>
					<li>
						<a href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-line"></i></a>
					</li>
				</ul>
			</div>


<?php the_tags('<div class="blc-tag"><p>タグ：</p><ul><li>','</li><li>','</li></ul></div>'); ?>

		</div>
	</article>
	<!--/article-->

<?php endif; ?>

<?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>
