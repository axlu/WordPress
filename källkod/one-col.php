<?php get_header();
/*
Template Name: En kolumn
*/
?>
<div class="wrapper">
<div class="container">
<div class="row">
    <section>
        <div class="col-12">
            <div class="newpage">
                <h2><?php the_field('onetitle'); ?></h2>
                <img src="<?php the_field('oneimage');?>" alt="Bild" />
                <p><?php the_field('onetext'); ?></p>
                <p><?php the_field('onetext2'); ?></p>
            </div>
        </div>
    </section>
</div>
    
    
    
    
    
    <div class="row">
        <article></article>
    </div>
</div> <!--- end of container -->
</div> <!--- end of wrapper -->
<?php get_footer(); ?>