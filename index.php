<?php get_header(); ?>

<div class="navigation-container">
    <?php wp_nav_menu(array( 'menu_class' => 'nav-bar', 'container_class' => 'container' )); ?> 
</div>
<?php if ( have_posts() ) : ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="kembe-box blog-container">
                    <?php while ( have_posts() ) : the_post() ?>
                        <div class="blog-post">
                            <?php if ( has_post_thumbnail() ): ?>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="blog-post-image-container">
                                        <div class="blog-post-image" style="background-image: url(' <?php the_post_thumbnail_url(); ?> ')"></div>
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                </a>
                            <?php else: ?>
                                <a href="<?php the_permalink(); ?>">
                                    <h3 style="color:black;"><?php the_title(); ?></h3>
                                </a>
                            <?php endif;?>
                            <span class="vertical-text"><?php the_time('d M, Y'); ?></span>
                            <div class="blog-post-body">
                                <?php the_excerpt(); ?>
                                <p><a href="<?php the_permalink(); ?>">Read more</a></p>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="nav-previous"><?php next_posts_link( 'Older posts' ); ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="nav-next alignright text-right"><?php previous_posts_link( 'Newer posts' ); ?></div>
            </div>
        </div>
    </div>
<?php endif;?>

<?php get_footer(); ?>
