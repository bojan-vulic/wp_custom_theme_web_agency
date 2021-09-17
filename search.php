<?php get_header(); ?>
    <!-- header -->
    <header class="single-header d-flex align-items-center">
        <div class="container text-center text-white">
            <h1 class="text-white">Results of searching</h1>
        </div>
    </header>
   
    <!-- latest posts -->
    <section class="container latest-posts py-5">
        
        <div class="row">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="col-md-4 mt-4">
                <div class="featured-image mb-4">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="content text-center">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>" class="button2"><?php echo('Read more'); ?></a>
                </div>
            </div>
        <?php endwhile; else : ?>
        <?php echo('No blog posts'); ?>
        <?php endif; ?>
        
        </div>
</section>

<?php get_footer(); ?>