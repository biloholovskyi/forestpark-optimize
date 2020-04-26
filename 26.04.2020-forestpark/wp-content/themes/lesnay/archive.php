<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LesnaySkazka
 */

get_header();
?>


<section class="block20 content">

	

        	<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
		   ?>
	
		

	</section>
	
		
		
	
		<div class="comp">
		<img class="nona" src="<?php echo get_template_directory_uri(); ?>/img/comp_in.png">
		
		<div class="plusik">
		    
		    <div class="krest_up">
		        <img src="<?php echo get_template_directory_uri(); ?>/img/krest.png">
		    </div>
		<h3></h3>
		<div class="bob">
			<p></p>
			<a href="">новости проекта</a>
		</div>
		<div class="hers">

	   </div>
	   <h4>Поделиться новостью в социальных сетях</h4>

	   <div class="soc_sety">
<?php
$title = 'Лесная сказка - котеджный поселок рядом с Казанью'; // заголовок
$summary = 'Чистый лесной воздух, которого не хватает в городе благоприятно влияет на здоровье взрослых и детей. Человек по настоящему отдыхает в лесной тишине, набирается сил для новых дел. Деревья никак не мешают благоустройству участка и постройке дома а все коммуникации уже заведены в поселок и есть своя управляющая компания, которая заботиться о всех жителях и оперативно решает задачи'; // анонс поста
$url = 'http://xn--80aaatiqcjt6ah4o.xn--p1ai/'; // ссылка на пост
$image_url = 'http://xn--80aaatiqcjt6ah4o.xn--p1ai/wp-content/themes/lesnay/img/logo_ru.svg' // URL изображения
?>
<a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode( $url ); ?>&t=<?php echo $title ?>" onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false" title="Поделиться ссылкой на Фейсбук" target="_parent"><img src="<?php echo get_template_directory_uri(); ?>/img/soc.png"></a>



<?php
$text = 'Лесная сказка - котеджный поселок рядом с Казанью'; // текст твита
?>
<a href="http://twitter.com/share?text=<?php echo $text ?>&url=<?php echo urlencode( $url ) ?>" title="Поделиться ссылкой в Твиттере" onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false" target="_parent"><img src="<?php echo get_template_directory_uri(); ?>/img/soc2.png"></a>
	   	

	   	
  	<a href=""></a> 
	   </div>
	</div>

</div>






<?php
get_footer();
