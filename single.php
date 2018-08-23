<?php get_header(); ?>

<div class="navigation-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav-bar">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/blog">Blog</a>
                    </li>
                    <li>
                        <a href="/kickstarter">Kickstarter</a>
                    </li>
                    <li>
                        <a href="/kickstarter-hoe-werkt-dat">Kickstarter (dutch)</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : ?>
            <div class="col-md-12">
                <div class="kembe-box blog-container">
                    <?php while ( have_posts() ) : the_post() ?>
                        <div class="blog-post">
                            <?php if ( has_post_thumbnail() ): ?>
                                <div class="blog-post-image-container" >
                                    <div class="blog-post-image" style="background-image: url(' <?php the_post_thumbnail_url(); ?> ')"></div>
                                    <h3><?php the_title(); ?></h3>
                                </div>
                            <?php else: ?>
                                <h3 style="color:black;"><?php the_title(); ?></h3>
                            <?php endif;?>
                            <span class="vertical-text"><?php the_time('d M, Y'); ?></span>
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
