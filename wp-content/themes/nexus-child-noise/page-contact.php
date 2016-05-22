<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>

  <section class="contact-hero">
    <div class="container">
      <img src="<?php echo child_template_directory ?>/images/icon-contact.png" class="contact-icon" alt="" />
      <h1>Let's talk.</h1>
      <h2>Leave your contact info and we’ll get in touch.</h2>
    </div>
  </section>

  <section class="contact-form">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="container">
        <?php the_content(); ?>
      </div>
    <?php endwhile; // end of the loop. ?>
  </section>

<?php get_footer(); ?>