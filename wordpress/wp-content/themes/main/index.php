<?php get_header(); ?>
<section class="bg-white dark:bg-gray-900">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"><?php the_permalink(); ?></h2>
                <p class="mb-4"><?php the_excerpt(); ?></p>
                <p>Автор: <?php the_author() ?></p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <?php head_blog_thumb_img( 'head-blog-single', '', false ); ?>
            </div>
        </div>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>