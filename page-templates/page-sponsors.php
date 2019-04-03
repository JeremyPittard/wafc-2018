<?php
/**
 * Template Name: Sponsors
 */

    $intro = get_field('intro');
    get_header();
    $direction = "data-aos='fade-left'";
    $blub_direction = "data-aos='fade-right'"
?>
<section class="sponsors">
    <div class="container"> 
    <div class="row">
        <h1 class="col-xs-12 sponsors__title" data-aos="fade-up"><?php echo $intro ?></h1>
    </div>
        <?php 
        if ( have_rows('sponsor')) :
            
            while (have_rows('sponsor')) : the_row();
            
            $logo = get_sub_field('logo')['url'];
            $name = get_sub_field('name');
            $description = get_sub_field('description');
            $website = get_sub_field('website');
            $fb = get_sub_field('facebook');
            $twitter = get_sub_field('twitter');
            $insta = get_sub_field('instagram');
            $contact = get_sub_field('contact');
        ?>
        <div class="row sponsors__sponsor-wrapper" <?php echo $direction; ?> >
            <figure class="col-xs-12 col-md-4" data-aos="zoom-in" data-aos-delay="200"> 
                <img class="sponsors__logo" src="<?php echo $logo?>" alt="<?php echo $name?>">
                <h2 class="spnonsors__name"><?php echo $name; ?></h2>
            </figure>
                <?php if($description) : ?>
                    <div class="col-xs-12 col-md-8 sponsors__description" <?php echo $blub_direction; ?> data-aos-delay="400">
                        <p><?php echo $description; ?></p>
                    </div> 
                <?php endif; ?>
                <?php if ($fb || $twitter || $inst) : ?>
                <div class="col-xs-12 col-md-8 sponsors__social">
                    <p>Social :</p> 
                    <?php if ($fb) :?>
                        <a href="<?php echo $fb['url']; ?>" title="<?php echo $name; ?> on facebook" target="_blank">
                            <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/facebook.svg' ); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($twitter) :?>
                        <a href="<?php echo $twitter['url']; ?>" title="<?php echo $name; ?> tweeting" target="_blank">
                            <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/twitter.svg' ); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($inst) :?>
                        <a href="<?php echo $inst['url']; ?>" title="<?php echo $name; ?> taking pics" target="_blank">
                            <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/insta.svg' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
        <?php endif; ?>
                <?php if($website) : ?>
                    <div class="col-xs-6 col-md-2 sponsors__site">
                        <a href="<?php echo $website['url']; ?>" targe="_blank">
							<?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/www.svg' ); ?><br/>Website
                        </a>
                    </div> 
                <?php endif; ?>
                <?php if($contact) : ?>
                    <div class="col-xs-6 col-md-2 sponsors__site">
                        <a href="tel:<?php echo $contact; ?>" targe="_blank">
                        <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/phone.svg' ); ?><br/><?php echo $contact; ?>
                        </a>
                    </div> 
                <?php endif; ?>
            
        </div>
            
<?php       
        if ($direction == "data-aos='fade-left'") {
            $direction = "data-aos='fade-right'";
        } else {
            $direction = "data-aos='fade-left'";

        }

        if ($blurb_direction == "data-aos='fade-left'") {
            $blub_direction = "data-aos='fade-right'";
        } else {
            $blub_direction= "data-aos='fade-left'";

        }
        endwhile;
?>
    </div>
</section>
<?php
        endif;
    get_footer();
?>
    