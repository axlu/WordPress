<?php get_header();
/*
Template Name: två kolumner
*/
?>
<div class="wrapper">
<div class="container">
<div class="row">
    <section>
        <div class="col-6">
            <div class="newpage">
                <h2><?php the_field('twotitle'); ?></h2>
                <img src="<?php the_field('twoimage');?>" alt="Bild" />
                <p><?php the_field('twotext'); ?></p>
            </div>
        </div>
        <div class="col-6">
            <div class="newpage">
                <h2><?php the_field('twotitle2'); ?></h2>
                <img src="<?php the_field('twoimage2');?>" alt="Bild" />
                <p><?php the_field('twotext2'); ?></p>
            </div>
        </div>
    </section>
</div>
    
    
    
    
    <div class="row">
        <article></article>
    </div>
    <div class="row">
        <section></section>
    </div>
    <div class="row">
        <section></section>
    </div>
</div> <!--- end of container -->
</div> <!--- end of wrapper -->
<?php get_footer(); ?>