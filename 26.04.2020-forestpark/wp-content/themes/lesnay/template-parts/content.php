<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LesnaySkazka
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
<div class="mini" data-ajax-param="<?php the_ID(); ?>">
			<img src="<?php echo get_the_post_thumbnail_url();?>">

			<div class="mini_txt">
				<p><?php echo get_the_date();?></p>
				<h4><?php the_title();?></h4>
				<a>новости проекта</a>
			</div>
		</div>
</article><!-- #post-<?php the_ID(); ?> -->
