<?php
/**
 * Template part for displaying project
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?>>
    <div class="single_case_page">
        <div class="card">
            <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('full');
            endif; ?>
            <div class="card-body">
                <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20, '.');?></p>
                <a href="<?php the_permalink();?>" class="btn"><?php echo __('Read More', 'ageland')?></a>
            </div>
        </div>
    </div>
    <!--/.single_case_page-->
</div>