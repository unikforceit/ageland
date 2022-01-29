<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single_blog_in'); ?>>
        <div class="">
            <div class="card">
                <?php if ( has_post_thumbnail()) : ?>
                <div class="images">
                    <a href="<?php echo esc_url( get_permalink() )?>"><?php the_post_thumbnail('full'); ?></a>
                    <div class="dates">
                        <p><?php the_date('M Y')?></p>
                    </div>
                </div>
                <?php endif; ?>
                <div class="card-body">
                    <ul>
                        <li><i class="fas fa-tags"></i> <?php ageland_single_category();?></li>
                        <li>
                            <a href="<?php the_permalink();?>#comment"><i class="fas fa-comment-alt"></i> <?php echo get_comments_number(); ?> <?php echo esc_html('Comments')?></a>
                        </li>
                        <li>
                            <p><?php echo get_avatar( get_the_author_meta('ID'), 30); ?> <?php echo esc_html('by')?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php echo get_the_author()?></a>
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
</article>