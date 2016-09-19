<?php
/**
 * The page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage cesselWebgateTheme
 * @since cesselWebgateTheme 0.1
 */

get_header(); ?>

<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
	<div class='container'>
		<div class="row visible-lg">
			<div class="col-lg-12">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row visible-md">
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row visible-sm">
			<div class="col-sm-12">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row visible-xs">
			<div class="col-xs-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>	

<?php } // конец while ?>






<?php
} // конец if
else 
	echo "<h2>Записей нет.</h2>";
?>
<?php get_footer(); ?>