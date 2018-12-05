<?php get_header();
/*
Template Name: tre kolumner
*/
?>
<div class="wrapper">
<div class="container">
<div class="row">
    <section>
        <div class="col-4">
            <div class="newpage">
                <h2><?php the_field('threetitle'); ?></h2>
                <img src="<?php the_field('threeimage');?>" alt="Bild" />
                <p><?php the_field('threetext'); ?></p>
            </div>
        </div>
        <div class="col-4">
            <div class="newpage">
                <h2><?php the_field('threetitle2'); ?></h2>
                <img src="<?php the_field('threeimage2');?>" alt="Bild" />
                <p><?php the_field('threetext2'); ?></p>
            </div>
        </div>
        <div class="col-4">
            <div class="newpage">
                <h2><?php the_field('threetitle3'); ?></h2>
                <img src="<?php the_field('threeimage3');?>" alt="Bild" />
                <p><?php the_field('threetext3'); ?></p>
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