<?php get_header(); /**
 *Template Name: Kontakt
 *
 */?>
<?php $blank = ' - '; ?>
<div class="wrapper">
<div class="container">
    <div class="row">
<section>
    <div class="col-6"><div class="hey"><h2><?php the_field('kontaktaoss'); ?></h2><br><h2><?php the_field('kontaktaoss2'); ?></h2></div></div>
    <div class="col-4">
        <div class="contactform">    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content();?>
        <?php endwhile; else: ?>
            <p>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
            </p>
        <?php endif; ?>
        </div>
    </div>
</section>
</div>
    <div class="row">
            <article></article>
        </div>
    <div class="row">
        <article></article>
    </div>
 </div>  <!--End of container -->
 </div>  <!--End of wrapper -->

<?php get_footer(); ?>