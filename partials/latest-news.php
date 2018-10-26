<section class="container latest-news">
    <div class="row">
        <div class="col-xs-12"><h2 class="latest-news__heading">Latest News</h2></div>
    </div>
    <div class="row">
        <?php
        $args = array( 'post_type' => 'news', 'posts_per_page' => 5 );
        $loop = new WP_Query( $args );
        $count = 0;
        while ( $loop->have_posts() ) : $loop->the_post(); 
             $image = get_field('feature_image'); 
             $count++;
             ?>
        <?php if ($count < 3) : ?>
            <article class="col-xs-12 col-sm-6 latest-news__card">
                <a href="<?php the_permalink(); ?>">
                        <div class="latest-news__background-container">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="latest-news__background-image">
                        </div>
                        <div class="latest-news__background-filter"></div>
                        <time class="latest-news__date"><?php echo get_the_date(); ?></time>
                        <h3 class="latest-news__story-title"><?php the_title();?></h3>
                </a>
            </article>
        <?php else : ?>
            <article class="col-xs-12 col-sm-4 latest-news__card">
                <a href="<?php the_permalink(); ?>">
                    <div class="latest-news__background-container">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="latest-news__background-image">
                    </div>
                    <div class="latest-news__background-filter"></div>
                    <time class="latest-news__date"><?php the_date(); ?></time>
                    <h3 class="latest-news__story-title"><?php the_title();?></h3>
                </a>      
            </article>
           

        <?php
        endif;
        endwhile;
        
        ?>
    
    </div>
    
</section>
<?php wp_reset_query(); ?>
