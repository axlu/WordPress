<?php get_header();
/*
Template Name: Hem
*/
?>
<div class="wrapper">
<div class="container">
<div class="row">
    <section>
        <div class="col-12">
            <div class="banner">
                <h2><?php the_field('reklambanner'); ?></h2>
            </div>
        </div>
    </section>
</div>
    <section>
    <div class="row">
    <div class="col-6">
    <div class="welcome">
    <img src="<?php the_field('startbild'); ?>" alt="startbild" />

</div><!--End Welcometext-->
</div> <!--- end col-6 -->
<div class="col-6">
<div class="welcometext">
    <h2><?php the_field('starttitel'); ?></h2>
    <p><?php the_field('starttext'); ?></p>
</div> <!--- end of welcome -->
</div> <!--- end of col-6(2) -->
    </div> <!--- end of row -->
    </section>
    <div class="row">
        <article></article>
    </div>
</div> <!--- end of container -->
</div> <!--- end of wrapper -->
<?php get_footer(); ?>