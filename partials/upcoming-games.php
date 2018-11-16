<?
    $logo = get_field('logo', 'option');
    $fixtures_bg = get_field('fixtures_bg');
    $card_count = 0;
    $team_count = count(get_field('team', 87)) ; // to be used to calculate where js resets the loop for the upcoming-games__card

?>

<section class="upcoming-games" style="background-image:url(<?php echo $fixtures_bg['url']; ?>);">
    <div class="upcoming-games__filter"></div>
    <div class="container upcoming-games__content" data-team-count="<?php echo $team_count; ?>">
        <div class="row">
            <div class="col-xs-12"><h2>Upcoming Games</h2></div>
        </div>
        
            <?php
                if(have_rows('team', 87)) :
                    while(have_rows('team', 87)) : the_row(); 
                    $team = get_sub_field('team_name');
                    ?>  
                        <div class="row upcoming-games__card <?php if($card_count < 1): echo 'active'; endif; ?>" data-loop-index="<?php echo $card_count; ?>" >
                            <div class="col-xs-12 upcoming-games__team-name">
                                <h3><?php echo $team ; ?></h3>
                                
                            </div>
                            <?php
                                if(have_rows('fixtures')) :
                                    while(have_rows('fixtures')) : the_row() ;
                                        $date = get_sub_field('datetime');
                                        $opponent = get_sub_field('opponent');
                                        $location = get_sub_field('location');
                                        $current_date = date('Y-m-d H:i:s');
                                        $myDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $date);
                                        $formatted_date = $myDateTime->format('d F Y \a\t h:iA');
                                        
                                        if($date > $current_date) : 
                                            $date_count = 0;
                                        ?>
                                            <div class="col-xs-12 upcoming-games__date"><?php echo $formatted_date; ?></div>
                                            <div class="col-xs-12 col-md-4 upcoming-games__logo-container"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']?>" class="upcoming-games__logo"></div>                                        
                                            <div class="col-xs-12 col-md-4 upcoming-games__versus"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/vs.svg" alt="Versus"></div>
                                            <div class="col-xs-12 col-md-4 upcoming-games__opponent"><h3><?php echo $opponent?></h3></div>
                                            <div class="col-xs-12 upcoming-games__location"><h3><?php echo $location ?></h3></div>
                                        <?php
                                        $date_count++;
                                        elseif ($date_count > 0) :
                                            break;
                                        
                                        endif;
                                    endwhile;
                                endif;
                            ?>
                        </div>
                        <?php 
                        $card_count++;
                    endwhile;
                endif; 
            ?>
            
        </div>
    </div>
</section>

<?php wp_reset_query();?>    




                