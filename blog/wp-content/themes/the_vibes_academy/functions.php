<?php
function the_vibes_academy_enqueue_scripts() {
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
        
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
        wp_enqueue_style('slick','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
        wp_enqueue_style('slick2', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
       // wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    
        wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'the_vibes_academy_enqueue_scripts');

function enqueue_styles_with_version() {
    $version = filemtime(get_template_directory() . '/style.css'); // Gets the file's last modified time
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css', array(), $version);
}
add_action('wp_enqueue_scripts', 'enqueue_styles_with_version');


function the_vibes_academy_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'the-vibes-academy'),
    ));
}

// Enqueue Scripts and Localize AJAX
function enqueue_load_more_scripts() {
    wp_enqueue_script(
        'load-more', 
        get_template_directory_uri() . '/js/load-more.js', 
        array('jquery'), 
        null, 
        true
    );

    wp_localize_script('load-more', 'load_more_params', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('load_more_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_load_more_scripts');

// AJAX Handler for Load More
function load_more_ajax_handler() {
    // Verify nonce for security
    check_ajax_referer('load_more_nonce', 'nonce');

    // Get the current page number
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;

    // Query arguments
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 6,
        'paged'          => $paged,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post_status'    => 'publish',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col CustomCard">
                <div class="card h-100">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top card-img-bottom" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.jpg" class="card-img-top card-img-bottom" alt="Default Image">
                        <?php endif; ?>
                    </a>
                    <div class="card-body">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) :
                            foreach ($categories as $category) : ?>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="CardCate mt-2 CategoryName">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            <?php endforeach;
                        endif; ?>
                        <h5 class="card-title mt-3 Title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h5>
                    </div>
                </div>
            </div>
        <?php endwhile;
    } else {
        echo '<p>No more posts found.</p>';
    }

    wp_die();
}
add_action('wp_ajax_load_more', 'load_more_ajax_handler');
add_action('wp_ajax_nopriv_load_more', 'load_more_ajax_handler');


add_action('after_setup_theme', 'the_vibes_academy_setup');




