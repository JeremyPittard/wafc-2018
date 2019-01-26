<?php
/**
 * Template Name: Sponsors
 */

    $intro = get_field('intro');
    get_header();
?>
<section class="sponsors">
    <div class="container">
        <h1 class="col-xs-12 sponsors__title"><?php echo $intro ?></h1>
        <?php 
        if ( have_rows('sponsor')) :
            
            while (have_rows('sponsor')) : the_row();
            
            $logo = get_sub_field('logo')['url'];
            $name = get_sub_field('name');
            $description = get_sub_field('description');
            $website = get_sub_field('website')['url'];
            $fb = get_sub_field('facebook')['url'];
            $twitter = get_sub_field('twitter')['url'];
            $insta = get_sub_field('instagram')['url'];
            $contact = get_sub_field('contact');
            $is_major = get_sub_field('major_sponsor');
        ?>
        <div class="row sponsors__sponsor-wrapper">
            <figure class="col-xs-12 col-md-4"> 
                <img class="sponsors__logo" src="<?php echo $logo?>" alt="<?php echo $name?>">
                <h2 class="spnonsors__name"><?php echo $name; ?></h2>
            </figure>
                <?php if($description) : ?>
                    <div class="col-xs-12 col-md-8 sponsors__description">
                        <p><?php echo $description; ?></p>
                    </div> 
                <?php endif; ?>
                <?php if($website) : ?>
                    <div class="col-xs-6 col-md-2 sponsors__site">
                        <a href="<?php echo $website; ?>" targe="_blank">
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
                <?php if ($fb || $twitter || $insta) : ?>
                <div class="col-xs-12 sponsors__social">
                    <p>Social :</p> 
                    <a href="<?php echo $fb; ?>" title="<?php echo $name; ?> on facebook" target="_blank">
                        <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/facebook.svg' ); ?>
                    </a>
                    <a href="<?php echo $twitter; ?>" title="<?php echo $name; ?> tweeting" target="_blank">
                        <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/twitter.svg' ); ?>
                    </a>
                    <a href="<?php echo $inst; ?>" title="<?php echo $name; ?> taking pics" target="_blank">
                        <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/insta.svg' ); ?>
                    </a>
                </div>
                <?php endif; ?>

        </div>
    </div>
</section>
<?php       endwhile;
        endif;
    get_footer();
?>
    