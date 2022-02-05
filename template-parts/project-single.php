<div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <div class="col-md-8">
        <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('full', ['class' => 'hero']);
        endif; ?>
    </div>
    <div class="col-md-4">
        <div class="project_details">
            <h4>Project Details</h4>
            <ul>
                <li>Date: <span>11/10/2018</span></li>
                <li>skills Needed: <span>Html/CSS Web design</span></li>
                <li>Technologies: <span>Adobe Photoshop Cc 2019</span></li>
                <li>Live Project: <span>www.spellbit.com</span></li>
                <li>Created By: <span>Tonmoy Khan</span></li>
                <li>Client Name: <span>Crist Deo</span></li>
                <li>Project Type: <span>illustration Vector</span></li>
            </ul>
        </div>
        <!--/.project_details-->
    </div>
    <div class="w-100"></div>
    <div class="col-md-12">
        <div class="main_content_tx">
            <h2><?php the_title();?></h2>
            <?php the_excerpt();?>
        </div>
        <!--/.main_content_tx-->
    </div>
    <div class="w-100 my-4"></div>
    <?php the_content();?>
</div>
