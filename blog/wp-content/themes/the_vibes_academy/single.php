<?php get_header(); ?>



 <!-- Banner end -->
<div class="ImageFull">
    <div class="SinglePageImage"> 
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100" alt="<?php the_title(); ?>" />
    </div>
</div>
<div class="PostViewDesign">
    <div class="container"> 
        <div class="PostInnerBox">
           <div class="PostHeading">
                <h1><?php the_title(); ?></h1>
                <p>Published on <?php echo get_the_date(); ?></p>
           </div>
           <?php the_content(); ?>
           
            <a href="<?php echo home_url(); ?>" class="BlogHomeLInk"> < BLOG HOME</a>
        </div>
    </div>
</div>
<div class="ShareBoxDesign">
    <div class="container"> 
        <div class="Boxx">
            <div class="Heading">Don’t forget to share this post!</div>
            <div class="SocialMediaShareList">
                 <?php
        // Get current post URL and title
        $post_url = urlencode(get_permalink());
        $post_title = urlencode(get_the_title());
        ?>
        
                <a href="https://www.facebook.com/dialog/send?link=<?php echo urlencode(get_permalink()); ?>"  target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/s1.svg" alt="share" />
                </a>
                <a href="mailto:?subject=<?php echo $post_title; ?>&body=<?php echo $post_url; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/s2.svg" alt="share" />
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $post_url; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/s3.svg" alt="share" />
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/s4.svg" alt="share" />
                </a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/s5.svg" alt="share" />
                </a>
                <a href="https://wa.me/?text=<?php echo $post_url; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/s6.svg" alt="share" />
                </a>
                
            </div>
        </div>
    </div>
</div>

<div class="PostCustom RecentPost">
    <div class="container"> 
        <div class="RecentBlogsHeading">Related Blogs</div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 RecentPost">
          
          <?php
// Get the current post's categories
$categories = get_the_category();
if ($categories) {
    // Get the IDs of the categories
    $category_ids = array();
    foreach ($categories as $category) {
        $category_ids[] = $category->term_id;
    }

    // Query for related posts in the same categories
    $args = array(
        'category__in'        => $category_ids,  // Fetch posts from these categories
        'posts_per_page'      => 3,               // Number of related posts to show
        'post__not_in'        => array(get_the_ID()), // Exclude the current post
        'orderby'             => 'rand',          // Order randomly
    );

    $related_posts_query = new WP_Query($args);

    // Check if there are related posts
    if ($related_posts_query->have_posts()) : ?>
    
    <?php while ($related_posts_query->have_posts()) : $related_posts_query->the_post(); ?>
    
    
                   <div class="col CustomCard">
                <div class="card h-100">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="ImageCardFixSize"><img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top card-img-bottom" alt="<?php the_title(); ?>"></div>
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
                    
                    
    
    
    <?php endwhile; ?>
         
    <?php endif;

    // Reset post data
    wp_reset_postdata();
}
?>
            
          
        </div>
 
    </div>
</div>


<?php get_footer(); ?>