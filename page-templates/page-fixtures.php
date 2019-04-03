<?php
/**
 * Template Name: Fixtures
 */
    get_header(); 
    ?><div id="top"></div><?php
    get_template_part('./partials/upcoming-games');

?>

<section class="upcoming-games">
    <div class="container upcoming-games__fixture" >
        <?php
            if (have_rows('game')) :
                while(have_rows('game')) : the_row();
                    $game_date = get_sub_field('game_date');
                    $current_date = date('Y-m-d');
                    $myDateTime = DateTime::createFromFormat('Y-m-d', $game_date);                
                    $formatted_date = $myDateTime->format('d F Y');
                ?>
                <div class="row" data-aos="fade-up">
                    <h2 class="col-xs-12 upcoming-games__date"><?php echo $formatted_date; ?></h2>
                    <?php 
                    if(have_rows('details', 87)) : 
                        while(have_rows('details', 87)) : the_row();
                        $raw_team = get_sub_field('team_playing');
                        $team = $raw_team['label'];
                        $opponent = get_sub_field('opposition_team');
                        $venue = get_sub_field("game_location");
                        $map_query = (preg_replace('/\s+/', '+', $venue));
                        $bounce_down = get_sub_field('game_start');                        
                ?>
                        <div class="col-xs-12 col-md-4 upcoming-games__details">
                            <h2 class="upcoming-games__team"><?php echo $team; ?></h2>
                            <h2>VS</h2>
                            <h2 class="upcoming-games__team"><?php echo $opponent; ?></h2>                                    
                            <a class="upcoming-games__maps-link" href="https://maps.google.com/?q=<?php echo $map_query; ?>" target="_blank" class="upcoming-games__venue">
                                <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/icon-map.svg' ); ?><br />
                                <?php echo $venue; ?>
                            </a>
                            <p class="upcoming-games__team"><?php echo $bounce_down; ?></p>
                        </div>
                        <?php
                        endwhile;
                    else: ?>
                        <h2 class="upcoming-games__date col-xs-12">
                            No upcoming games scheduled check back soon!
                        </h2>
                            <?php
                    endif;?>
                    </div> <?
                endwhile;
            endif;
    
        ?>
    </div>         
</section>
<?php
get_footer();
?>  
