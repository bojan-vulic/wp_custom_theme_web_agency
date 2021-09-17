<?php get_header(); ?>
    <!-- header -->
    <header class="single-header d-flex align-items-center">
        <div class="container text-center text-white">
            <h1 class="text-white"><?php the_title(); ?></h1>
        </div>
    </header>
   
    <!-- latest posts -->
    <section class="container single py-5">
        
        <div class="row mt-4">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="col-md-8 offset-2 mt-2">
                <div class="featured-image mb-4">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="content text-center">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                  
            </div>
        <?php endwhile; else : ?>
        <?php echo('No blog posts'); ?>
        <?php endif; ?>
        
        </div>
        </div>
</section>

<?php get_footer(); ?>