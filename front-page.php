<?php get_header(); ?>
<!-- header -->
<header class="d-flex align-items-center">
    <div class="container text-center text-white">
        <h1><?php the_field('glavni_naslov'); ?></h1>
        <p><?php the_field('tekst_ispod_glavnog_naslova'); ?></p>
        <button class="button1"><?php echo('contact'); ?></button>
    </div>
</header>
<!-- about -->
<section class="about container py-5">
    <div class="row">
        <div class="col-md-6 d-flex flex-column justify-content-center ">
            <h2><?php the_field('naslov_prve_sekcije'); ?></h2>
            <hr>
            <p><?php the_field('tekst_prve_sekcije'); ?></p>
        </div>
        <div class="col-md-6">
            <img src="<?php the_field('slika_prve_sekcije'); ?>" alt="">
        </div>
    </div>
</section>
<!-- services -->
<section class="services py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row text-center pb-5">
                    <div class="col-md-6 col-sm-4 mt-5"><i class="bi bi-slack"></i></div>
                    <div class="col-md-6 col-sm-4 mt-5"><i class="bi bi-slack"></i></div>
                    <div class="col-md-6 col-sm-4 mt-5"><i class="bi bi-slack"></i></div>
                    <div class="col-md-6 col-sm-4 mt-5"><i class="bi bi-slack"></i></div>
                    <div class="col-md-6 col-sm-4 mt-5"><i class="bi bi-slack"></i></div>
                    <div class="col-md-6 col-sm-4 mt-5"><i class="bi bi-slack"></i></div>
                </div>
            </div>
            <div class="col-md-6 text-white">
                <h2><?php the_field('naslov_druge_sekcije'); ?></h2>
                <hr>
                <p><?php the_field('prvi_tekst_druge_sekcije'); ?></p>
                <p><?php the_field('drugi_tekst_druge_sekcije'); ?></p>
                <p><?php the_field('treci_tekst_druge_sekcije'); ?></p>
                <p><?php the_field('cetvrti_tekst_druge_sekcije'); ?></p>
            </div>

        </div>
    </div>
</section>
<!-- latest posts -->
<section class="container latest-posts py-5">
    <h2 class="text-center">Latest posts</h2>
    <hr>
    <div class="row">
        <?php
    
        $the_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => '3'
        )); ?>

        <?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
