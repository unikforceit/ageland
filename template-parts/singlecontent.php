<div id="post-<?php the_ID(); ?>" <?php post_class('blog-left ul-li seperator wow animate__fadeInUp'); ?>
     data-wow-duration="1.5s">
    <?php if (has_post_thumbnail()) : ?>
        <div class="blog-img">
            <?php the_post_thumbnail('full'); ?>
        </div>
    <?php endif; ?>
    <div class="postInfo d-flex flex-wrap align-items-center">
        <div class="items d-flex align-items-center">
            <div class="icon">
                <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.09004 9.58511C9.03754 9.57761 8.97004 9.57761 8.91004 9.58511C7.59004 9.54011 6.54004 8.46011 6.54004 7.13261C6.54004 5.77511 7.63504 4.67261 9.00004 4.67261C10.3575 4.67261 11.46 5.77511 11.46 7.13261C11.4525 8.46011 10.41 9.54011 9.09004 9.58511Z"
                          stroke="#224259" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M14.0548 14.5349C12.7198 15.7574 10.9498 16.4999 8.99982 16.4999C7.04982 16.4999 5.27982 15.7574 3.94482 14.5349C4.01982 13.8299 4.46982 13.1399 5.27232 12.5999C7.32732 11.2349 10.6873 11.2349 12.7273 12.5999C13.5298 13.1399 13.9798 13.8299 14.0548 14.5349Z"
                          stroke="#224259" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z"
                          stroke="#224259" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <p class="content"><?php echo esc_html('By '); ?><?php echo get_the_author(); ?></p>
        </div>
        <div class="items d-flex align-items-center">
            <div class="icon">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 1.5V3.75" stroke="#224259" stroke-width="1.5" stroke-miterlimit="10"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 1.5V3.75" stroke="#224259" stroke-width="1.5" stroke-miterlimit="10"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.625 6.81738H15.375" stroke="#224259" stroke-width="1.5" stroke-miterlimit="10"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.75 6.375V12.75C15.75 15 14.625 16.5 12 16.5H6C3.375 16.5 2.25 15 2.25 12.75V6.375C2.25 4.125 3.375 2.625 6 2.625H12C14.625 2.625 15.75 4.125 15.75 6.375Z"
                          stroke="#224259" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M11.7713 10.2749H11.778" stroke="#224259" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M11.7713 12.5249H11.778" stroke="#224259" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M8.99686 10.2749H9.00359" stroke="#224259" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M8.99686 12.5249H9.00359" stroke="#224259" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M6.22049 10.2749H6.22723" stroke="#224259" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M6.22049 12.5249H6.22723" stroke="#224259" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
            <p class="content"><?php echo get_the_date('j F, Y'); ?></p>
        </div>
        <div class="items d-flex align-items-center">
            <div class="icon">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.5 9C16.5 13.14 13.14 16.5 9 16.5C4.86 16.5 1.5 13.14 1.5 9C1.5 4.86 4.86 1.5 9 1.5C13.14 1.5 16.5 4.86 16.5 9Z"
                          stroke="#224259" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.7827 11.3849L9.45766 9.99745C9.05266 9.75745 8.72266 9.17995 8.72266 8.70745V5.63245"
                          stroke="#224259" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <p class="content"><?php echo esc_html('5 Min Read'); ?></p>
        </div>
    </div>
    <div class="blog-post-content">
        <h3 class="archive_title"><?php the_title(); ?></h3>
        <div class="info">
            <?php the_content(); ?>
        </div>
    </div>
</div>