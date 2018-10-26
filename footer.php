<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bad_Funk_Stripe
 */

 $facebook = get_field('facebook_link', 'options');
 $twitter = get_field('twitter_link', 'options');
 $instagram = get_field('instagram_link', 'options');

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3 site-footer__signup">
				<!-- email signup	 -->
				<?php echo do_shortcode('[yikes-mailchimp form=1]'); ?> 
					<!-- club contacts -->
					<div class="site-footer__contact">
						<h3>Club Contacts</h3>
						<?php if ( have_rows('contacts', 'options') ) :					
								while( have_rows('contacts', 'options') ) : the_row(); 
								$position = get_sub_field('position_held');
								$name = get_sub_field('name');
								$phone = get_sub_field('contact_number');
								$email = get_sub_field('contact_email');
								?>

								<ul class="site-footer__contacts">
									<li><?php echo $position . ": " . $name; ?></li>
									<?php if($phone) :?><li>Phone: <?php echo $phone ;?></li> <?php endif ; ?>
									<?php if($email) :?><li>Email: <?php echo $email ;?></li> <?php endif ; ?>

								</ul>
						
							<?php endwhile; ?>
						
						<?php endif; ?>
						</div>
				</div>
				<div class="col-xs-12 col-md-6  site-footer__social">
					<!-- only display icon if facebook link is in wordpress back end -->
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
				<div class="col-xs-12 col-md-3 site-footer__details">
					 <ul>
						 <li>
							 <a href="#top">Back To Top</a>
						 </li>
						 <li>
							<a href="">privacy policy</a>
						 </li>
						 <li>
							 <a href="">terms and conditions</a>
						 </li>
						 <li>
							 <a href="">sitemap</a>
						 </li>
						 <li>site by <a href="https://jpittard.net" target="_blank">this guy</a></li>
					 </ul>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
