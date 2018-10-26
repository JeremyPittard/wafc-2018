<?php
/**
 * Template Name: Sponsors
 */

    $intro = get_field('intro');
    get_header();
?>
 
 <h1><?php echo $intro ?></h1>


<?php 
    if ( have_rows('sponsor')) :
        
        while (have_rows('sponsor')) : the_row();
        
        $logo = get_sub_field('logo')['url'];
        $name = get_sub_field('name');
        $website = get_sub_field('website')['url'];
        $contact = get_sub_field('contact');
        $is_major = get_sub_field('major_sponsor');


?>

<ul>
    <li><?php echo $name ; ?> </li>
    <li><?php echo $logo ; ?> </li>
    <li><?php echo $website ; ?> </li>
    <li><?php echo $contact ; ?></li>
    <li><?php echo $is_major ; ?> </li>

</ul>
        
<?php   endwhile;
    endif;
    get_footer();
    ?>
    