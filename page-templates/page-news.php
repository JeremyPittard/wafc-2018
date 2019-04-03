<?php
    /**
     * Template Name: News
     */
    get_header();

    $delay = 0;
?>


<div class="news" id="top">
<section class="container latest-news">
    <div class="row">
        <div class="col-xs-12"><h2 class="latest-news__heading">Latest News</h2></div>
    </div>
    <div class="row">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array( 'post_type' => 'news', 'posts_per_page' => 5, 'paged' => $paged);
        $loop = new WP_Query( $args );
        $count = 0;
        while ( $loop->have_posts() ) : $loop->the_post(); 
             $image = get_field('feature_image'); 
             $count++;
             ?>
        <?php if ($count < 3) : ?>
            <article class="col-xs-12 col-sm-6 latest-news__card" data-aos="fade-up"  data-aos-delay="<?php echo $delay; ?>">
                <a href="<?php the_permalink(); ?>">
                        <div class="latest-news__background-container">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="latest-news__background-image">
                        </div>
                        <div class="latest-news__background-filter"></div>
                        <time class="latest-news__date" data-aos="fade-down" data-aos-delay="<?php echo $delay + 100; ?>" ><?php echo get_the_date(); ?></time>
                        <h3 class="latest-news__story-title" data-aos="fade-right" data-aos-delay="<?php echo $delay + 200; ?>" ><?php the_title();?></h3>
                </a>
            </article>
            
        <?php
        $delay += 200;
        else : ?>
            <article class="col-xs-12 col-sm-4 latest-news__card" data-aos="fade-up"  data-aos-delay="<?php echo $delay; ?>">
                <a href="<?php the_permalink(); ?>">
                    <div class="latest-news__background-container">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="latest-news__background-image">
                    </div>
                    <div class="latest-news__background-filter"></div>
                    <time class="latest-news__date" data-aos="fade-down" data-aos-delay="<?php echo $delay + 100; ?>" ><?php the_date(); ?></time>
                    <h3 class="latest-news__story-title" data-aos="fade-right" data-aos-anchor="center-bottom" data-aos-delay="<?php echo $delay + 200; ?>" ><?php the_title();?></h3>
                </a>      
            </article>
           

        <?php
        $delay += 200;
        endif;
        endwhile;
        ?>
    
    </div>
        <?php
            $total_pages = $loop->max_num_pages;
            $current_page = max(1, get_query_var('paged'));

            if ($total_pages > 1) :            
            $current_page = max(1, get_query_var('paged'));
            ?>
                <div class="row">
                    <div class="col-xs-12 latest-news__pagination">
                    Page &nbsp;
                        <?php
                         echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text'    => __('&larr;'),
                            'next_text'    => __('&rarr;'),
                        ));
                        
                        ?>
                    </div>
                </div>
                <?php
            endif;  
        ?>
    
    
</section>

<?php 
    wp_reset_query();
    wp_reset_postdata(); 
?>

<?php get_footer();
    