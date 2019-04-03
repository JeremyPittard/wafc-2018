<?php
$delay = 0;
?>

<section class="container upcoming-events">
    <div class="row">
        <div class="col-xs-12 col-md-3"><h2 class="upcoming-events__heading">Upcoming Events</h2></div>
    </div>
    <div class="row">
        <?php
            $args = array( 
                'post_type' => 'Events', 
                'posts_per_page' => 3,
                'orderby' => 'meta_value_num',
                'meta_key' => 'event_date',
                'order' => 'asc'
             );
            $loop = new WP_Query( $args );
            
            if ($loop->have_posts()) :
            
            while ( $loop->have_posts() ) : $loop->the_post(); 
            $image = get_field('feature_image');  
            $event_date = get_field('event_date');
            $date_to_format = DateTime::createFromFormat('Y-m-d H:i:s', $event_date);
            $formatted_event_date = $date_to_format->format('d F Y \a\t h:iA');
            $event_location = get_field('where');
        ?>

            <article class="col-xs-12 col-md-4 upcoming-events__event-card" data-aos="fade-up" data-aos-delay="<?php echo $delay?>">
                <a href="<?php the_permalink(); ?>">
                    <div class="upcoming-events__background-container"><img class="upcoming-events__background-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
                    <div class="upcoming-events__background-filter"></div>
                    <time datetime="<?php echo $event_date; ?>" class="upcoming-events__event-date"  data-aos="fade-right" data-aos-delay="<?php echo $delay+100; ?>"><?php echo $formatted_event_date; ?></time>
                    <h3 class="upcoming-events__event-title" data-aos="fade-left"  data-aos-delay="<?php echo $delay+100; ?>"><?php the_title(); ?></h3>
                </a>
            </article>
            
            
        <?php
        $delay += 200;
        endwhile;

        else : ?>
        <div class="col-xs-12" data-aos="fade-up" >
           <h2>
               No upcoming events check back soon
           </h2> 
        </div>
        
    <?php endif; ?>
    
    </div>
    
</section>
<?php wp_reset_query(); ?>

