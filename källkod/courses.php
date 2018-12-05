<?php get_header();
/*
Template Name: Kurser
*/
?>
<div class="wrapper">
<div class="container">
<div class="row">
    <section>
        <div class="col-12">
            <div class="banner">
                <h2><?php the_field('sidtitel'); ?></h2>
            </div>
        </div>
    </section>
</div>
    
    <div class="row">
    <section>
    <div class="col-3">
    <div class="courses">
    <img src="<?php the_field('kursbild1'); ?>" alt="startbild" />
    </div><!--End courses-->
    </div> <!--- end col-3 -->
    <div class="col-9">
    <div class="coursestext">
        <h2><?php the_field('kurstitel1'); ?></h2>
        <p><?php the_field('kursinfo1'); ?></p>
    </div> <!--- end of coursestext -->
    </div> <!--- end of col-9 -->
    </section>
    </div> <!--- end of row -->
    
    <section>
    <div class="row">
    <div class="col-3">
    <div class="courses">
    <img src="<?php the_field('kursbild2'); ?>" alt="startbild" />

</div><!--End courses-->
</div> <!--- end col-6 -->
<div class="col-9">
<div class="coursestext">
    <h2><?php the_field('kurstitel2'); ?></h2>
    <p><?php the_field('kursinfo2'); ?></p>
</div> <!--- end of coursestext -->
</div> <!--- end of col-6(2) -->
    </div> <!--- end of row -->
    </section>
    
    <section>
    <div class="row">
    <div class="col-3">
    <div class="courses">
    <img src="<?php the_field('kursbild3'); ?>" alt="startbild" />

</div><!--End Welcometext-->
</div> <!--- end col-6 -->
<div class="col-9">
<div class="coursestext">
    <h2><?php the_field('kurstitel3'); ?></h2>
    <p><?php the_field('kursinfo3'); ?></p>
</div> <!--- end of welcome -->
</div> <!--- end of col-6(2) -->
    </div> <!--- end of row -->
    </section>
    
    
    <section>
        <div class="col-3"><div class="empty"><br></div></div>
        <div class="col-6"><div class="apply"><?php the_content();?></div></div>
    </section>
    <div class="row">
        <article></article>
    </div>
</div> <!--- end of container -->
</div> <!--- end of wrapper -->
<?php get_footer(); ?>