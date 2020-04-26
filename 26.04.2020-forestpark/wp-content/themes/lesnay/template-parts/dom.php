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
<div class="roof">
			<h3><?php the_title();?></h3>
			<p class="pl_all"><?php the_field('площадь_дома');?></p>
			<img class="myone_img" src="<?php echo get_the_post_thumbnail_url();?>">
			<div class="dop_dannye" style="display:none">
			    <p class="kol_komnat"><?php the_field('комнат');?></p>
			    <img class="gal1" src="<?php the_field('дополнительное_фото_1');?>">
			    <img class="gal2" src="<?php the_field('дополнительное_фото_2');?>">
		        <img class="im_steny" src="<?php the_field('из_чего_дом');?>">
		        <img class="im_fund" src="<?php the_field('фундамент');?>">
			</div>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
