<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
if (is_active_sidebar('sidebar-2')){
    $col = 'col-lg-12';
}else {
    $col = 'col-lg-4 col-md-6';
}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class($col); ?>>


    <div class="blog_page_single_post">
        <div class="single_blog_in">
            <div class="card">
                <?php if ( has_post_thumbnail()) : ?>
                <div class="images">
                    <a href="<?php echo esc_url( get_permalink() )?>"><?php the_post_thumbnail('full'); ?></a>
                    <div class="dates">
                        <p>Sep 2018</p>
                    </div>
                </div>
                <?php endif; ?>
                <div class="card-body">
                    <ul>
                        <li><a href="#"><i class="fas fa-tags"></i> <?php echo get_the_category(); ?></a></li>
                        <li>
                            <a href="#"><i class="fas fa-comment-alt"></i> <?php echo get_comments_number(); ?> Comments</a>
                        </li>
                        <li>
                            <p><img src="<?php echo get_avatar( get_the_author_meta()); ?>" alt="#" />by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php echo get_the_author()?></a>
                            </p>
                        </li>
                    </ul>
                    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt();?></p>
                    <a href="<?php the_permalink();?>" class="btn"><?php echo __('reads more', 'ageland')?></a>
                </div>
            </div>
        </div>
        <!--/.single_blog_in-->

    </div>
</div>