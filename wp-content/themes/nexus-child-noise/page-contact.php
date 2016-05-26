<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>

  <section class="contact-hero">
    <div class="container">
      <img src="<?php echo child_template_directory ?>/images/icon-contact.png" class="contact-icon" alt="" />
      <?php 
        $cp = get_pages(array('include' => 5));
        foreach( $cp as $c ) {
          if( get_field('contact_page_main_header', $c->ID) ): ?>
            <h1><?php the_field('contact_page_main_header', $c->ID); ?></h1>
          <? endif;
          if( get_field('contact_page_sub_header', $c->ID) ): ?>
            <h2><?php the_field('contact_page_sub_header', $c->ID); ?></h2>
          <? endif; ?>
        <? } ?>
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