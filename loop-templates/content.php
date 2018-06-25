<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article class="card" id="post-<?php the_ID(); ?>">
	<?php the_title( sprintf( '<h5 class="card-header"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
	'</a></h5>' ); ?>
	<?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'card-img-top' ) ); ?>
	<div class="card-body">

		<p class="card-text"><?php
				the_excerpt();
				?></p>
		<p class="card-text"><small class="text-muted"><?php //understrap_posted_on(); ?></small></p>
	</div>
<div class="card-footer"><?php understrap_entry_footer(); ?></div>
</article>


		<?php
		//the_excerpt();
		?>

		<?php
		/*wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );*/
		?>

		<?php //understrap_entry_footer(); ?>
