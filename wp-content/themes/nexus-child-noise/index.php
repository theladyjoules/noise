<?php get_header(); ?>
		
	<section class="home">
		<div class="container">
			<h1><img src="<?php echo child_template_directory ?>/images/logo.png" class="logo" alt="NOISE" /></h1>
			<h2>Presentation + Info Design</h2>
		</div>
	</section>

	<section class="slideshow">
		<div class="nexus-slideshow">
	    <div id='nexus_slider_wrapper' class='nexus_slider_wrapper fullwidthbanner-container' >
        <div id='nexus-rev-slider' class='rev_slider fullwidthabanner'>
          <ul>
            <li class="slide-green" data-transition='slideright' data-masterspeed='1000'>
            	<img src='<?php echo child_template_directory; ?>/images/background-slide-1.png' data-bgposition='center bottom' data-bgfit='normal' data-bgrepeat='no-repeat' alt="slider-image1" />
              <div class="info container">
                <h2 class='tp-caption LargeTitle sft tp-resizeme' data-x='0' data-y='92' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'>We Help</h2>
                <h3 class='tp-caption ExtraLargeTitle sfb tp-resizeme' data-x='0' data-y='126' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Sharpen your story.</h3>
              </div>
            </li>
            <li class="slide-blue" data-transition='boxslide' data-masterspeed='1000'>
            	<img src='<?php echo child_template_directory; ?>/images/background-slide-2.png' data-bgposition='center bottom' data-bgfit='normal' data-bgrepeat='no-repeat' alt="slider-image1" />
              <div class="info container">
                <h3 class='tp-caption LargeTitle sft tp-resizeme' data-x='0' data-y='92' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'>We Bring</h2>
                <h4 class='tp-caption ExtraLargeTitle sfb tp-resizeme' data-x='0' data-y='126' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Cool into the content.</h3>
              </div>
            </li>
            <li class="slide-yellow" data-transition='slideup' data-masterspeed='1000'>
            	<img src='<?php echo child_template_directory; ?>/images/background-slide-3.png' data-bgposition='center bottom' data-bgfit='normal' data-bgrepeat='no-repeat' alt="slider-image1" />
              <div class="info container">
                <h2 class='tp-caption LargeTitle sft tp-resizeme' data-x='0' data-y='92' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'>Our Passion</h2>
                <h3 class='tp-caption ExtraLargeTitle sfl tp-resizeme' data-x='0' data-y='126' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Your pitch is our passion.</h3>
              </div>
            </li>
          </ul>
        </div>
	    </div>
	  </div>
	</section>  

	<section class="about" id="mantra">
		<div class="container">
			<h2>We are visual storytellers.</h2>
			<p>we give your presentations power;<br />interactivate your information;<br />and champion your content.</p>
			<h3>We make your story cut thru.</h3>
			<a class="btn btn-red internal" href="work">See Our Work</a>
		</div>
	</section>

	<section class="skills" id="services">
		<div class="container">
			<h2><span class="standard-text">We D</span><span class="o"></span></h2>
			<div class="row">
				<div class="col-md-6">
					<h3>Sharp</h3>
					<ul>
						<li>Powerpoint / Keynote</li>
						<li>True Design</li>
						<li>Data Narratives</li>
					</ul>
				</div>
				<div class="col-md-6">
					<h3>Sharper</h3>
					<ul>
						<li>HTML5-Based</li>
						<li>Universal</li>
						<li>Limitless Design</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

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
			<a class="btn btn-green" href="#">Contact Us</a>
			<img src="<?php echo child_template_directory ?>/images/icon-badge.png" class="badge-icon" alt="Cut Thru" />
		</div>
	</section>

<?php get_footer(); ?>