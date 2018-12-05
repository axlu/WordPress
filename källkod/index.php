<?php get_header(); 
/*
Template Name: INDEX
*/?>
<?php $blank = ' - '; ?>
<div class="wrapper">
   <div class="row">
    <section>
        <div class="col-12">
            <div class="banner">
                <h2>Nyheter</h2>
            </div>
        </div>
    </section>
</div>
</div>
<div class="wrapper">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section>
    <div class="col-4">
        <div class="hovering">
        <div class="iconwhite">
            
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
	        the_post_thumbnail(500);
            } ?></a>
            </div>
            <div class="classtext">
            <a href="<?php echo get_permalink(); ?>"><h2><?php the_title();?></h2></a>
            <p><?php the_time( get_option( 'date_format' ) ); ?></p><br>
            <p><?php echo mb_strimwidth( get_the_content(), 0, 100, '...');?>
        <a href="<?php echo get_permalink(); ?>"> Läs mer</a><!--Vill man ha en forkortad variant av nyhetsinlägg skrivs the_excerpt();--></p>
            </div>
            </div>
    </div> <!--- end of col-4(1) -->
    </section>
    <?php endwhile; else: ?>
            <p>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
            </p>
        <?php endif; ?>

    <div class="row">
            <article></article>
        </div>
    <div class="row">
        <article></article>
    </div>
 </div>  <!--End Container-->
<?php get_footer(); ?>