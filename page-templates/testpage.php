<?php get_header(); /* Template Name: Test page */ ?>
<div class="navigation-container">
    <?php wp_nav_menu(array( 'menu_class' => 'nav-bar', 'container_class' => 'container' )); ?> 
</div>
<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : ?>
            <div class="col-md-12">
                <div class="kembe-box blog-container">
                    <?php while ( have_posts() ) : the_post() ?>
                        <div class="">
                            <?php if ( has_post_thumbnail() ): ?>
                                <div class="blog-post-image-container" >
                                    <div class="blog-post-image" style="background-image: url(' <?php the_post_thumbnail_url(); ?> ')"></div>
                                    <h3><?php the_title(); ?></h3>
                                </div>
                            <?php else: ?>
                                <h3 style="color:black;"><?php the_title(); ?></h3>
                            <?php endif;?>
                            <div class="blog-post-body">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        <?php endif;?>
    </div>
</div>
<?php get_footer(); ?>
