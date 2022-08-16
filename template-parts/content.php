<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 col-md-6'); ?>>
    <div class="blog-item">
        <?php if (has_post_thumbnail()) : ?>
            <div class="blog-thumb">
                <?php the_post_thumbnail('full'); ?>
            </div>
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>" class="blog-hover">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog_hover.svg" alt="">
        </a>
        <div class="blog-info">
            <a href="<?php the_permalink(); ?>" class="title">
                <?php the_title(); ?>
            </a>
            <p>
                <?php echo get_the_excerpt(); ?>
            </p>
        </div>
    </div>
</article>