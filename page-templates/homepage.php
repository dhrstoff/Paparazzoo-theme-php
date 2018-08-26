<?php get_header(); /* Template Name: Homepage */ ?>

<div class="homepage-top">
    <img id="kickstarter-coming-soon" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/kickstarterSeptember4th.png"/>
    <div class="homepage-massive-image" style="background-image: url(' <?php the_field('banner_image') ?> ')"></div>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h1 class="text-center no-select">Paparazzoo</h1>
        <span class="text-center no-select"><?php the_field('tagline'); ?></span>
    </div>
</div>
<div class="navigation-container">
    <?php wp_nav_menu(array( 'menu_class' => 'nav-bar', 'container_class' => 'container' )); ?> 
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="kembe-box homepage-signup">
                <ul class="side-bar">
                    <?php get_sidebar('sidebar-1'); ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <?php if( get_field('pitch') ): ?>
                <div class="kembe-box colored-bg" style="background-color: <?php the_field('pitch_background_color'); ?>">
                    <div class="kembe-box-body">
                        <p><?php the_field('pitch'); ?></p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="row">
                <?php if( have_rows('specs') ): ?>
                    <div class="col-md-6 col-lg-12">
                        <div class="kembe-box colored-bg" style="background-color: <?php the_field('specs_background_color'); ?>">
                            <div class="kembe-box-body">
                                <h2>Specs</h2>
                                <ul class="icon-list">
                                    <?php while ( have_rows('specs') ) : the_row(); ?>
                                        <li><?php the_sub_field('icon'); ?> <span><?php the_sub_field('text'); ?></span></li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="col-md-6 col-lg-12">
                    <div class="kembe-box colored-bg" style="background-color: <?php the_field('latest_rulebook_background_color'); ?>">
                        <div class="kembe-box-body">
                            <h2>Rulebook</h2>
                            <?php
                            $file = get_field('latest_rulebook');
                            if( $file ): ?>
                            	<a href="<?php echo $file['url']; ?>" target="_blank">Download <?php echo $file['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <?php the_field('board_game_images'); ?>
    </div>
</div>
<div class="container">
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '2'
    );
    $blog_loop = new WP_Query( $args );

    if ( $blog_loop->have_posts() ) : ?>
    <div class="row">
        <div class="col-md-12">
            <h2>Latest news</h2>
        </div>
            <?php while ( $blog_loop->have_posts() ) : $blog_loop->the_post();
                ?>
                <div class="col-md-6">
                    <div class="kembe-box blog-container">
                <div class="blog-post">
                    <?php if ( has_post_thumbnail() ): ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="blog-post-image-container blog-post-image-container-homepage">
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
                        <p><?php the_excerpt(); ?></p>
                        <p><a href="<?php the_permalink(); ?>">Read more</a></p>
                    </div>
                </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <div class="col-md-12">
                <p>
                    <a href="/blog">See all posts</a>
                </p>
            </div>
        </div>
    <?php endif;?>
</div>

<?php get_footer(); ?>
