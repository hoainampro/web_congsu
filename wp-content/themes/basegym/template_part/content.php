<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (has_post_thumbnail() ): ?>
		<div class="post-images text-center">
			<div class="image-inner">
				<?php the_post_thumbnail('full', array('class'=>'img-responsive center-block')); ?>
			</div>
		</div>
	<?php endif; ?>
	<h3 class="post-title">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h3>
	<div class="post-content">
		<?php the_excerpt(); ?>
	</div>
</article>