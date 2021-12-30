<?php 

class ageland_theme_hooks {

    function __construct() {
 
        add_action('wp_body_open',array(&$this,'render_preloader'));
        add_action('wp_body_open',array(&$this,'render_scroll_top'));
        add_action('upload_mimes',array(&$this,'cc_mime_types'));
        add_action('wp_enqueue_scripts',array(&$this,'ageland_bar_plugin_scripts'));

        add_action('ageland_single_navigation',array(&$this,'single_nav'));
        add_action('ageland_pagination',array(&$this,'ageland_posts_pagination'));
        add_action('ageland_related_post',array(&$this,'ageland_related_post'));
        add_action('ageland_authorbox',array(&$this,'ageland_authorbox'));
        add_action('ageland_share_tags',array(&$this,'ageland_share_tag'));
 
        add_action('ageland_header',array(&$this,'ageland_render_header'));
        add_action('ageland_footer',array(&$this,'ageland_render_footer'));
        add_action('ageland_sidebar',array(&$this,'ageland_render_sidebar'));
        add_action('ageland_sidebar_left',array(&$this,'ageland_render_sidebar_left'));
        add_action('footer_widget',array(&$this,'ageland_render_footer_widget'));

    }        
 
    function render_preloader(){

        if( ageland_theme_option('enb_pre') == '1' ){
            echo '<!-- pre-loder-area area start here  -->
        <div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
        <!-- pre-loder-area area start here  -->';
        }
    }
    function render_scroll_top(){

        if( ageland_theme_option('enb_scroll') ){
            echo '<button class="scroll-top"><span class="fa fa-angle-up"></span></button>';
        }
    }

    function ageland_render_sidebar(){

        $cust_header = ageland_theme_option('sidebar');
        echo do_shortcode('[INSERT_ELEMENTOR id="'.$cust_header.'"]');
        
    }
    function ageland_render_sidebar_left(){

        $cust_header = ageland_theme_option('sidebar_left');
        echo do_shortcode('[INSERT_ELEMENTOR id="'.$cust_header.'"]');

    }

    function ageland_render_footer_widget(){

        $cust_header = ageland_theme_option('footer_widget');
        echo do_shortcode('[INSERT_ELEMENTOR id="'.$cust_header.'"]');

    }
 
    function ageland_render_footer(){

        $meta_switch = ageland_theme_meta('footer_switch');
        $meta_footer = ageland_theme_meta('meta_footer');
        $footer = $meta_switch ? $meta_footer : '';
        if ($footer) {
            echo do_shortcode('[INSERT_ELEMENTOR id="' . $footer . '"]');
        }
    }

    function ageland_render_header(){
        $meta_switch = ageland_theme_meta('header_switch');
        $meta_header = ageland_theme_meta('meta_header');
        $header = $meta_switch ? $meta_header : '';
        if ($header) {
            echo do_shortcode('[INSERT_ELEMENTOR id="' . $header . '"]');
        }
    }

    function ageland_share_tag(){

        $tagtitle = ageland_theme_option('tag_title');
        $sharetitle = ageland_theme_option('share_title');

        $post_tags = get_the_tags();
        $separator = ' ';
        if (!empty($post_tags)) {
            foreach ($post_tags as $tag) {
                $output .= '<a href="'. get_tag_link($tag->term_id).'">' . $tag->name . '</a>' . $separator;
            }
            $tags = '<li>'.trim($output, $separator).'</li>';
            $out = '
                <h3>'.$sharetitle.'</h3>
                <ul>'.$tags.'</ul>
            ';
        }
    ?>    

        <div class="share_tag"> 
            <div class="ageland_tag float-left text-left ul-li">
                <?php echo ageland_html($out);?>
            </div>
            <div class="share_post float-right text-right ul-li">
                <h3><?php echo ageland_html($tagtitle);?></h3>
                <?php echo fashmag_social_post_share();?>
            </div>
        </div>

    <?php }

    function ageland_authorbox(){
 
        $authorid = get_the_author_meta('ID');
        $user_meta = get_user_meta( $authorid, '_yl_pfile', true );
        $title = ageland_theme_option('auth_title');
        if (isset($user_meta["avatar"]["id"])){
            $img = wp_get_attachment_image($user_meta["avatar"]["id"],'full');
        }

    ?>

        <div class="postby_author">
            <div class="author_img">
                <?php echo ageland_html($img);?>
            </div>
            <span><?php echo ageland_html($title);?></span>
            <h3><a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>"><?php echo get_the_author_meta( 'display_name', $authorid ); ?></a></h3>
            <p><?php echo get_the_author_meta( 'description', $authorid ); ?></p>
        </div>

    <?php }

    function ageland_related_post(){
        $title = ageland_theme_option('related_title');
        $id = $GLOBALS['post']->ID;
        $postcat = wp_get_post_categories( $id );
        $all_cat = implode(',' , $postcat);
        $args = array(  
            'posts_per_page' => 2,
            'post__not_in' => array($pid),
        ); 
        $args['cat'] = $all_cat;
        $wp_query = new WP_Query($args);

    ?>

        <div class="related_postview">
            <h3><?php echo ageland_html($title);?></h3>
            <?php
                if ( $wp_query->have_posts() ) {
                    echo '<div class="row">';
                    while ($wp_query->have_posts()) : $wp_query->the_post();?>

                        <div class="col-md-6">
                            <div class="related_postitem">
                                <div class="postitem_img">
                                    <?php the_post_thumbnail(); ?> 
                                </div>
                                <div class="postitem_text">
                                    <span class="blog-meta"><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                    <p><?php echo ap_limited_excerpt(10);?></p>
                                </div>
                            </div>
                        </div>
 
                   <?php endwhile; wp_reset_postdata();echo '</div>';    
                }
            ?>
        </div>

    <?php }

    function ageland_posts_pagination(){

        global $wp_query;
        $big = 999999999; 
        $pages = paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'prev_next' => false,
                'type'  => 'array',
                'prev_next'   => TRUE,
                'prev_text' => '<i class="fas fa-angle-double-left"></i>',
                'next_text' => '<i class="fas fa-angle-double-right"></i>',
            ) );
            if( is_array( $pages ) ) {
                $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
                echo '<div class="blog_pagination text-center"><ul class="pagination">';
                foreach ( $pages as $page ) {
                        echo "<li>$page</li>";
                }
               echo '</ul></div>';
            }

    }

    function single_nav(){

        $post_id = $GLOBALS['post']->ID;
        $pid = get_previous_post_id($post_id);
        $nid = get_next_post_id($post_id);
        $plink = get_permalink($pid);
        $nlink= get_permalink($nid);

    ?>

        <div class="next_prev_post relative-position  clearfix">

            <?php if(!empty($pid)){ ?>
                <div class="nio_prev_post text-left float-left headline">
                        <a href="<?php echo ageland_html($plink);?>">
                            <span class="nio-prev-lbl">Prev Post</span>
                            <h3><?php echo limit_title_length_thm(get_the_title($pid),20); ?></h3>
                        </a>
                </div>
            <?php } ?>

            <?php if(!empty($nid)){ ?>
                <div class="nio_prev_post text-right float-right headline">
                    <a href="<?php echo ageland_html($plink);?>">
                        <span class="nio-prev-lbl">Next Post</span>
                        <h3><?php echo limit_title_length_thm(get_the_title($nid),20); ?></h3>
                    </a>
                </div>
            <?php } ?>

            <div class="bar_point text-center">
                <i class="fas fa-th"></i>
            </div>
        </div>

    <?php }

    function ageland_bar_plugin_scripts() {

        function dynamic_css() {
            ob_start();
            include plugin_dir_url(__FILE__) . '/vendor/frontend/css.php';
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }
        wp_add_inline_style('wp-block-library', dynamic_css(),9 );

    }

    function cc_mime_types($mimes) {
      $mimes['svg'] = 'image/svg+xml';
      return $mimes;
    }

    function back_to_top() {
        $show = '';
        if($show){
            echo '<a href="#" class="scrollToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>';        
        }
    }                                  
    
}

new ageland_theme_hooks();

function get_previous_post_id( $post_id ) {

    global $post;
    $oldGlobal = $post;
    $post = get_post( $post_id );
    $previous_post = get_previous_post();
    $post = $oldGlobal;
    if ( '' == $previous_post )
        return false;
    return $previous_post->ID;
}

function get_next_post_id( $post_id ) {

    global $post;
    $oldGlobal = $post;
    $post = get_post( $post_id );
    $next_post = get_next_post();
    $post = $oldGlobal;
    if ( '' == $next_post )
        return false;
    return $next_post->ID;
}

function limit_title_length_thm($title,$words){
    if( $words > 10 ){
        return mb_strimwidth($title, 0, $words, '..');
    } else {
        return $title;
    }
}
