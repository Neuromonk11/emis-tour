<?php get_header(); ?>

<?php get_template_part( 'template-parts/template-part', 'head' ); ?>
<?php get_template_part( 'template-parts/homepage', 'widgets' );?>
<!-- start content container -->
<div class="row">
		<div class="col-md-<?php head_blog_main_content_width_columns(); ?>">

		<?php
		if ( have_posts() ) :
			$posts = wp_get_recent_posts( [
				'numberposts'      => 5,
				'offset'           => 0,
				'category'         => 0,
				'orderby'          => 'post_date',
				'order'            => 'DESC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'post',
				'post_status'      => 'draft, publish, future, pending, private',
				'suppress_filters' => true,
			], OBJECT );

			foreach($posts as $post) {
				setup_postdata( $post );
				get_template_part( 'content', get_post_format() );

			}

			the_posts_pagination();

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

	</div>

	<?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->			

<?php get_footer(); ?>
