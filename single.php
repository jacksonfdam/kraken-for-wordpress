<?php get_header();
/* ======================================================================
 * Single.php
 * Template for individual blog posts.
 * ====================================================================== */
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article>

	    <header>
		    <h1><?php the_title(); ?></h1>
		    <aside>
			    <p><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y') ?></time><?php edit_post_link('[Edit]', ' - ', ''); ?></p>
		    </aside>
	    </header>

	    <?php the_content(); ?>

	    <?php comments_template(); ?>

    </article>

<?php endwhile; endif; ?>

	
<?php get_footer(); ?>
