<?php get_header(); ?>
<div class="main">


	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<!-- Start: Post -->
			<div <?php post_class(); ?>>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> <?php edit_post_link(__('Edit this entry', 'black_with_orange'), '', ''); ?></h2>
				<p class="post-meta"><span class="date"><?php the_time( get_option( 'date_format' ) ) ?></span> <span class="author"><?php the_author() ?></span> <span class="cats"><?php the_category(", "); ?></span><?php if ( comments_open() ) : ?>, <span class="comments"><?php comments_popup_link('0', '1', '%'); ?></span> <?php endif; ?></p>
				<?php the_post_thumbnail(); ?>
				<?php the_excerpt(); ?>
				<p class="more"><a href="<?php the_permalink() ?>"><?php _e( ' ', 'black_with_orange' );?></a></p>
				<?php if(has_tag()): ?><p class="tags"><span><?php the_tags(""); ?></span></p><?php endif; ?>
			</div>
			<!-- End: Post -->
		<?php endwhile; ?>

		<p class="pagination">
			<span class="prev"><?php next_posts_link(__('Previous Posts', 'black_with_orange')) ?></span>
			<span class="next"><?php previous_posts_link(__('Next posts', 'black_with_orange')) ?></span>
		</p>
	<?php else : ?>
		<h2 class="center"><?php _e( 'Not found', 'black_with_orange' ); ?></h2>
		<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'black_with_orange' ); ?></p>
		<?php get_search_form(); ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
