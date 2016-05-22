<?php /* Template Name: Our Work Landing */ ?>

<?php get_header(); ?>

  <section class="work-hero">
    <div class="container">
      <h1><span class="standard-text">Our W</span><span class="o white"></span><span class="standard-text">rk</span></h1>
    </div>
  </section>

  <section class="work work-page">
    <div class="container">
      <div class="row">
        <?php 
          $projects = get_pages(array('child_of' => 32));
          foreach( $projects as $project ) {
        ?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="project">
              <a href="<?php echo get_page_link( $project->ID ); ?>">
                <?php if( get_field('thumbnail_image', $project->ID) ): ?>
                  <img src="<?php the_field('thumbnail_image', $project->ID); ?>" alt="<?php echo $project->post_title; ?>" />
                <?php endif; ?>
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>