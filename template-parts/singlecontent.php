<div id="post-<?php the_ID(); ?>" <?php post_class('single_blog_in'); ?>>
    <div class="card">
        <?php if (has_post_thumbnail()) : ?>
            <div class="images">
                <?php the_post_thumbnail('full'); ?>
                <div class="dates">
                    <p><?php the_date('M Y'); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <ul class="info">
                <li><i class="fas fa-tags"></i> <?php ageland_single_category(); ?></li>
                <li>
                    <a href="<?php the_permalink(); ?>#comment"><i
                                class="fas fa-comment-alt"></i> <?php echo get_comments_number(); ?> <?php echo esc_html('Comments') ?>
                    </a>
                </li>
                <li>
                   <?php echo get_avatar(get_the_author_meta('ID')); ?> <?php echo esc_html('by') ?> <a
                                href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php echo get_the_author() ?></a>

                </li>
            </ul>
            <h2><?php the_title() ?></h2>
            <div class="blog-des">
                <?php the_content(); ?>
            </div>
            <div class="related-blog-post">
                <h4>Related Article.</h4>
                <ul class="related_article">
                    <li><a href="#">1. Warches into stiff sections. The bedding was hardly able
                            to cover</a></li>
                    <li><a href="#">2. Mit and seemed ready to slide off any moment.</a></li>
                    <li><a href="#">3. His many legs, pitifully thin compared with the size of
                            the rest of him, waved about</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="post_share_btn">
    <ul>
        <li>Share This Post:</li>
        <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#" class="in"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#" class="li"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
</div>