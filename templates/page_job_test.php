<?php

/* Template Name: Job Test Template */

get_header()
?>



<!-- legacy section  -->
<div class="idea_theorem_container_full_width" style="background-image: url(<?php echo get_theme_mod( 'testimonial_background' ) ?>);">
  <div class="idea_theorem_legacy_content">
    <div class="header-image">
      <img src="<?php echo get_theme_mod('testimonial_logo')?>" alt="header-image">
    </div>
    <div class="title">
      <h2><?php echo get_theme_mod('testimonial_title_setting') ?></h2>
    </div>
    <div class="content">
      <p>
        <?php echo esc_html(get_theme_mod('testimonial_content_setting')) ?>
      </p>
    </div>
    <div class="idea_theorem_member">
      <div class="member-photo">
        <img src="<?php echo get_theme_mod('testimonial_person_image')?>" >
      </div>
      <div class="member-details">
    
        <h4 class="name"><?php echo esc_html(get_theme_mod('testimonial_person_name')) ?></h4>
        <p class="title"> <?php echo esc_html(get_theme_mod('testimonial_person_details')) ?></p>
      </div>
    </div>
  </div>
</div>


<!-- CHANGE SECTION  -->


<div class="idea_theorem-challenge__wrapper container idea_theorem_container">

  <div class="row">
    <div class="col-lg-4">
      <div class="section-title">
        <h3><?php echo esc_html(get_theme_mod('testimonial_img_box_title_setting')) ?> <span style="color: <?php echo get_theme_mod('image-box-text-color')?>"><?php echo esc_html(get_theme_mod('testimonial_img_box_color_title_setting')) ?></span></h3>
      </div>
      <div class="idea_theorem-section-content">
        <p class="idea_theoremcontent">
        
        <?php echo esc_html(get_theme_mod('testimonial_content_set')) ?>
        </p>
      </div>
    </div>
    <div class="col-lg-8 idea_theorem-section-image">
      <img src="<?php echo get_theme_mod('idea_image') ?>" class="img-fluid" alt="section-image">
    </div>
  </div>
</div>


<!-- CHANGE SECTION  END -->