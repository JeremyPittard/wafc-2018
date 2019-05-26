<?php
/**
 * Template Name: Honour Board
 */

get_header();
$board_count = 1;
$delay = 0;

?>
<section class="honor-board__links" id="top">
    <div class="container">
        <div class="row">
            <?php
            if (have_rows('achievement')) :
                while (have_rows('achievement')) : the_row();
                    $title = get_sub_field('title');
                    $title_id = strtolower(trim(preg_replace('/\s+/', '', $title)));
                    ?>

                    <a href="#<?php echo $title_id; ?>" class="honor-board__link col-xs-12 col-md-4" data-aos="fade">
                        <h3><?php echo $title; ?></h3>
                    </a>
                <?php
            endwhile;
        endif; ?>
        </div>
    </div>
</section>

<?php
if (have_rows('achievement')) :

    while (have_rows('achievement')) : the_row();
        $title = get_sub_field('title');
        $title_id = strtolower(trim(preg_replace('/\s+/', '', $title)));
        $description = get_sub_field('description');
        ?>
        <section class="honor-board <?php if ($board_count % 2 === 0) : echo 'alternate';
                                    endif; ?>" id="<?php echo $title_id ?>">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <h2 class="col-xs-12 honor-board__title" id="<?php echo $title_id; ?>"><?php echo $title ?></h2>
                    <p class="col-xs-12"><?php echo $description; ?></p>

                    <?php
                    if (have_rows('player')) :
                        while (have_rows('player')) : the_row();
                            $season = get_sub_field('season');
                            $player = get_sub_field('player_name');
                            $photo = get_sub_field('photo');
                            ?>
                            <figure class="col-md-2 col-xs-12 honor-board__player" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
                                <?php
                                if ($delay < 750) {
                                    $delay += 150;
                                } else {
                                    $delay = 0;
                                }


                                if ($photo) : ?><img src="<?php echo $photo['url']; ?>" alt="" class="honor-board__photo">
                                <?php
                            else :
                                ?>
                                    <?php echo file_get_contents(get_stylesheet_directory_uri() . '/img/icons/trophy.svg');

                                endif;
                                ?>
                                <figcaption class="honor-board__player-name"><?php echo $player; ?></figcaption>
                                <figcaption class="honor-board__season"><?php echo $season; ?></figcaption>

                            </figure>

                        <?php

                    endwhile;
                    $delay = 0;
                endif; ?>
                </div>
            </div>
        </section>
    <?php
endwhile;
endif;

get_footer();
?>