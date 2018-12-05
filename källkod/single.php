<?php get_header(); ?>
<div class="wrapper">
<div class="container">
    <section>
    <div class="col-8">
    <div class="article">
        <div class="artimg">
        <?php if ( has_post_thumbnail() ) {
	        the_post_thumbnail(500);
            } ?></div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h3><?php the_title();?></h3> 
        <?php the_content(); ?><!--Vill man ha en forkortad variant av nyhetsinlägg skrivs the_excerpt();-->
        <br>
        <p><?php the_time( get_option( 'date_format' ) ); ?></p>
        <?php endwhile; else: ?>
            <p>
                <?php _e('Sorry, no posts found'); ?>
            </p>
        <?php endif; ?>
    </div>
    </div><!--End Left-->
    <div class="col-4">
        <?php get_sidebar('scrisoft'); ?>
    </div><!--End Section Right-->
    </section>
    <div class="row">
            <article></article>
        </div>
    <div class="row">
        <article></article>
    </div>
 </div>  <!--End of container -->
</div>  <!--End of wrapper -->
<?php get_footer(); ?>