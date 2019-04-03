<?php
/*
 * Template Name: News Article
 * Template Post Type: post, News, Story
 */
  
 get_header();  
 
//  Variables
$title = get_the_title();
$image = get_field('feature_image');
$text = get_field('content');

 ?>



<div class="news" id="top">
  <div class="news__hero" id="page-start" data-aos="fade-down" >
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
  </div>
  <article class="container">
    <div class="row">
      <div class="col-xs-12" data-aos="fade-right" >
       <span class="news__label" >
        <?php 
          $post = get_queried_object();
          $postType = get_post_type_object(get_post_type($post));
          if ($postType) {
            echo esc_html($postType->labels->name);
          }
          ?>
        </span>
      </div>    

      <h2 class="col-xs-12" data-aos="fade-left" >
        <?php echo $title; ?>
      </h2>
      <p class="col-xs-12" data-aos="fade-up">
          <?php echo $text; ?>
      </p>
      <figure class="col-xs-12" data-aos="fade-up" >
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        <!-- <figcaption>add field for image caption</figcaption>           -->
      </figure>
    </div>
    <div class="row">
      <a href="#page-start" class="col-xs-2 col-xs-offset-10">back to top</a>
    </div>
  </article>
</div>

<?php
  get_footer();
?>