<?php
/**
 * Template Name: Contact Us
 */
 get_header();

 $facebook = get_field('facebook_link', 'options');
 $twitter = get_field('twitter_link', 'options');
 $instagram = get_field('instagram_link', 'options');
?>
 
 <div class="contact" id="top">

 <section class="contact-us">
     <div class="container">
         <div class="row">
             <div class="col-xs-12 col-md-6 contact-us__social">
                 <h2>Find Us On Social Media</h2>
                 <!-- only display icon if facebook link is in wordpress back end -->
                <div class="social-wrap">
                    <?php if($facebook) : ?> 
                    <a href="<?php echo $facebook['url'];?>" title="warriors bookfacing" target="_blank">
                        <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/facebook.svg' ); ?>
                    </a>
                    <?php endif;?>
                    
                    <!-- only display icon if twitter link is in wordpress back end -->
                    <?php if($twitter) : ?> 
                    
                    <a href="<?php echo $twitter['url'];?>" title="warriors tweeting" target="_blank">
                            <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/twitter.svg' ); ?>
                        </a>
                        <?php endif;?>
                        <!-- only display icon if instagram link is in wordpress back end -->
                        <?php if($instagram) : ?> 
                        
                        <a href="<?php echo $instagram['url'];?>" title="warriors taking pictures" target="_blank">
                                <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/icons/insta.svg' ); ?>
                            </a>
                            <?php endif;?>
                </div>
             </div>
             <div class="col-xs-12 col-md-6 contact-us__contacts">

             <h3>To talk Membership or Sponsorship opportunites, contact one of our representatives below</h3>
						<?php if ( have_rows('contacts', 'options') ) :					
								while( have_rows('contacts', 'options') ) : the_row(); 
								$position = get_sub_field('position_held');
								$name = get_sub_field('name');
								$phone = get_sub_field('contact_number');
								$email = get_sub_field('contact_email');
								?>

								<ul class="contact-us__contacts-list">
									<li><strong><?php echo $position . ": " . $name; ?></strong></li>
									<?php if($phone) :?><li>Phone: <?php echo $phone ;?></li> <?php endif ; ?>
									<?php if($email) :?><li>Email: <?php echo $email ;?></li> <?php endif ; ?>

								</ul>
						
							<?php endwhile; ?>
						
						<?php endif; ?>
             </div>
         </div>
     </div>
 </section>








    <?php 
    get_template_part('./partials/map');
     
    ?>
</div>
<?php get_footer();
    