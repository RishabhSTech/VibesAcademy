<?php get_header(); ?>

<div class="carouselCustom">
      <div class="container">
        <div class="slider">
            
    <?php
    // Fetch the last 4 published blog posts
    $args = array(
        'post_type'      => 'post', // Fetch posts
        'posts_per_page' => 4,      // Limit to 4 posts
        'post_status'    => 'publish', // Only published posts
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
     
        while ($query->have_posts()) : $query->the_post(); ?>        
            
            <div>
                <div class="carousel-inner2">
                    <div class="carousel-item2  "  >
                      <a href="<?php the_permalink(); ?>">
                          
                      <?php if (has_post_thumbnail()) : ?>
                       <div class="ImageFixSize"><img class="d-block w-100" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>"> </div>
                      <?php else : ?>
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/default-image.jpg" alt="Default Image">
                     <?php endif; ?>
                
                
                    
                      <div class="carousel-caption2">
                        <h5 class="text-left CatrgoryTagDesign">
                            
                        <?php 
                        $categories = get_the_category();
                             if (!empty($categories)) : 
                                    foreach ($categories as $category) : ?>
                        
                                     <?php echo esc_html($category->name); ?>
                        
                                 <?php endforeach; 
                        endif; ?>
                            
                            
                        </h5>
                        <p class="text-left BannerHeading"><?php the_title(); ?></p>
                      </div>
                  </a>
                </div>
            </div>
          </div>
    
    <?php endwhile;
     
    wp_reset_postdata(); // Reset the query
    else :
    echo '<p>No recent blogs found.</p>';
    endif;
    ?>  
          
          
          
          
      </div>
</div>
</div>
 <!-- Banner end -->
 
<!-- Banner end -->
<div class="PostCustom">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3" id="blog-container" >
            
       <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 6,
        'paged'          => 1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post_status'    => 'publish',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col CustomCard">
                <div class="card h-100">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                           <div class="ImageCardFixSize"> <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top card-img-bottom" alt="<?php the_title(); ?>"></div>
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
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>


 

                     
        </div>
        <div class=" d-flex justify-content-center align-items-center py-4">
             <a href="javascript:;" id="load-more-btn" class="btn customloadmoreBtn btn-outline-secondary">Load More</a> 
        </div>
    </div>
</div> 


<?php get_footer(); ?>
    <script>
     jQuery(document).ready(function(){
        jQuery('.slider').slick({
          dots: true,
          infinite: true,
          speed: 500,
          slidesToShow: 1,
          adaptiveHeight: true
        });
      });
    </script>
