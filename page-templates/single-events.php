<?php
/*
 * Template Name: Event
 * Template Post Type: post, Events, Event
 */

get_header();

//  Variables
$image = get_field('feature_image');
$title = get_the_title($post_id);
//format the date to a normal way of reading as opposed as the way it is currently read in php for the ability to order it .
$event_date = get_field('event_date');
$date_to_format = DateTime::createFromFormat('Y-m-d H:i:s', $event_date);
$when = $date_to_format->format('d F Y \a\t h:iA');
$where = get_field('where');
$why = get_field('why');
$fb_link = get_field('fb_event')
?>



<div class="event" id="top">
  <div class="event__hero" id="page-start">
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
  </div>
  <article class="container">
    <div class="row">
      <div class="col-xs-12">
        <span class="event__label">
          <?php
          $post = get_queried_object();
          $postType = get_post_type_object(get_post_type($post));
          if ($postType) {
            echo esc_html($postType->labels->name);
          }
          ?>
        </span>
      </div>

      <h2 class="col-xs-12">
        <?php echo $title; ?>
      </h2>
      <div class="col-xs-12">
        <h2>Why:</h2>
        <p><?php echo $why; ?></p>
      </div>
      <div class="col-xs-4">
        <h2>When:</h2>
        <p><?php echo $when; ?></p>
      </div>
      <div class="col-xs-4">
        <h2>Where:</h2>
        <p><?php echo $where; ?></p>
      </div>
      <div class="col-xs-6">
        <h2>RSVP</h2>
        <a href="<?php $fb_link['url'] ?>" target="_blank">Event page on facebook</a>
      </div>


    </div>

  </article>
</div>

<?php
get_footer();
?>