<?php get_header();
/*
Template Name: PAGE
*/
?>
<?php $blank = ' - '; ?>
 <div class="row">
 <section>
    <div class="col-4">
        <div class="hovering">
        <div class="iconwhite">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h3><?php the_title();?></h3>
<br>
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail('thumbnail');
} ?>
<br>
</div> <!--- end of iconwhite -->
<div class="classtext">
        <?php echo wp_trim_words( get_the_content(), 45, '...');?>
        <?php endwhile; else: ?>
            <p>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
            </p>
        <?php endif; ?>
    </div>
    </div>
    </div><!--End Left-->
    </section>
    </div> <!--- end of row -->
    <div class="row">
            <article></article>
        </div>
    <div class="row">
        <article></article>
    </div>
 </div>  <!--End Container-->

<?php get_footer(); ?>