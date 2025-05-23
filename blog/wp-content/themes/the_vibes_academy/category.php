<?php get_header(); ?>
<?php get_header(); ?>
<div class="CategoryBox">
    <div class="container">
        <h1 class="category"><?php single_cat_title(); ?></h1>
    </div>
</div>
<div class="PostCustom">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                <div class="col CustomCard">
                    <div class="card h-100">
                        <a href="<?php the_permalink(); ?>">
                            <div class="ImageCardFixSize">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top card-img-bottom" alt="<?php the_title(); ?>">
                                </div>
                            </a>
                        <div class="card-body">
                           
                            <h5 class="card-title mt-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        </div>
                    </div>
                </div>
                
            <?php endwhile; else: ?>
                <p>No posts found in this category.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>


<?php get_footer(); ?>