<div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <div class="col-md-8">
        <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('full', ['class' => 'hero']);
        endif; ?>
    </div>
    <div class="col-md-4">
        <div class="project_details">
            <h4><?php echo esc_html('Project Details')?></h4>
            <ul>
                <li><?php echo wp_kses_post('Date: <span>11/10/2018</span>')?></li>
                <li><?php echo wp_kses_post('skills Needed: <span>Html/CSS Web design</span>')?></li>
                <li><?php echo wp_kses_post('Technologies: <span>Adobe Photoshop Cc 2019</span>')?></li>
                <li><?php echo wp_kses_post('Live Project: <span>www.spellbit.com</span>')?></li>
                <li><?php echo wp_kses_post('Created By: <span>Tonmoy Khan</span>')?></li>
                <li><?php echo wp_kses_post('Client Name: <span>Crist Deo</span>')?></li>
                <li><?php echo wp_kses_post('Project Type: <span>illustration Vector</span>')?></li>
            </ul>
        </div>
        <!--/.project_details-->
    </div>
    <div class="w-100"></div>
    <div class="col-md-12">
        <div class="main_content_tx">
            <?php the_excerpt();?>
        </div>
        <!--/.main_content_tx-->
    </div>
    <div class="w-100 my-4"></div>
    <?php the_content();?>
</div>
