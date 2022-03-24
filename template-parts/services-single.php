<?php
/**
 * Template part for displaying services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>
    <div class="single_details_service_p">
        <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('full');
        endif; ?>
        <div style="padding-top: 50px;"></div>
        <?php the_excerpt();?>

    </div>
    <!--/.single_details_service_p-->
    <?php the_content();?>
</div>