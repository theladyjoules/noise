<?php get_header(); ?>
		
	<section class="home">
		<div class="container">
			<h1><?php nexusnoisechild_the_custom_logo(); ?></h1>
			<h2><?php echo get_bloginfo('description') ?></h2>
		</div>
	</section>


  <?php 
    $slides = get_pages(array('child_of' => 43));
    $sliderSizes = array('desktop', 'tablet', 'mobile');
    foreach($sliderSizes as $sliderSize){
  ?>
	<section class="slideshow slideshow-<?php echo $sliderSize ?>">
		<div class="nexus-slideshow">
	    <div id='nexus_slider_wrapper' class='nexus_slider_wrapper fullwidthbanner-container'>
        <div id='nexus-rev-slider-<?php echo $sliderSize ?>' class='rev_slider fullwidthabanner'>
          <ul>
            <?php 
              foreach( $slides as $slide ) {
                if( get_field('slide_header_1', $slide->ID) && get_field('slide_header_2', $slide->ID) && get_field('slider_image', $slide->ID) && get_field('slide_animation', $slide->ID) && get_field('slide_color', $slide->ID) ){
              ?>
                <li class="slide-<?php the_field('slide_color', $slide->ID) ?>" data-transition='<?php the_field('slide_animation', $slide->ID) ?>' data-masterspeed='1000'>
                	<img src='<?php the_field('slider_image_' . $sliderSize, $slide->ID) ?>' data-bgposition='center bottom' data-bgfit='normal' data-bgrepeat='no-repeat' alt="" />
                  <div class="text-container">
                    <h2 class='tp-caption LargeTitle sft' data-x='0' data-y='196' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><?php the_field('slide_header_1', $slide->ID) ?></h2>
                    <h3 class='tp-caption ExtraLargeTitle sfb' data-x='0' data-y='230' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><?php the_field('slide_header_2', $slide->ID) ?></h3>
                  </div>
                </li>
              <?php } ?>
            <?php } ?>
          </ul>
        </div>
	    </div>
	  </div>
	</section>  
  <?php } ?>


  <?php 
    $m = get_pages(array('include' => 65)); ?>
  	<section class="about" id="mantra">
  		<div class="container">
        <?php foreach( $m as $mantra ) { 
          if( get_field('mantra_main_header', $mantra->ID) ): ?>
  		      <h2><?php the_field('mantra_main_header', $mantra->ID); ?></h2>
          <? endif;
          if( get_field('mantra_body_copy', $mantra->ID) ): ?>
            <p><?php the_field('mantra_body_copy', $mantra->ID); ?></p>
          <? endif;
          if( get_field('mantra_sub_header', $mantra->ID) ): ?>
            <h3><?php the_field('mantra_sub_header', $mantra->ID); ?></h3>
          <? endif; ?>
  			<a class="btn btn-red internal" href="work">See Our Work</a>
  		</div>
  	</section>

  	<section class="skills" id="services">
  		<div class="container">
  			<h2><span class="standard-text">We D</span><span class="o"></span></h2>
  			<div class="row">
  				<div class="col-md-6">
            <?php if( get_field('mantra_left_column_header', $mantra->ID) ): ?>
              <h3><?php the_field('mantra_left_column_header', $mantra->ID); ?></h3>
            <? endif;
            if( get_field('mantra_left_column_content', $mantra->ID) ): ?>
              <?php the_field('mantra_left_column_content', $mantra->ID); ?>
            <? endif; ?>
  				</div>
  				<div class="col-md-6">
  					<?php if( get_field('mantra_right_column_header', $mantra->ID) ): ?>
              <h3><?php the_field('mantra_right_column_header', $mantra->ID); ?></h3>
            <? endif;
            if( get_field('mantra_right_column_content', $mantra->ID) ): ?>
              <?php the_field('mantra_right_column_content', $mantra->ID); ?>
            <? endif; ?>
  				</div>
  			</div>
  		</div>
  	</section>
  <?php } ?>

	<section class="work" id="work">
		<div class="container">
			<h2><span class="standard-text">Our W</span><span class="o"></span><span class="standard-text">rk</span></h2>
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

	<section class="contact">
		<div class="container">
			<a class="btn btn-green" href="/contact">Contact Us</a>
			<img src="<?php echo child_template_directory ?>/images/icon-badge.png" class="badge-icon" alt="Cut Thru" />
		</div>
	</section>

<?php get_footer(); ?>