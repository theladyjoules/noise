<?php /* Template Name: Project */ ?>

<?php get_header(); ?>
  <?php while ( have_posts() ) : 
    the_post(); 
    $hasVideo = (get_field('vimeo_embed_code') == '') ? false : true;
    $hasDeck = (get_field('speaker_deck_url') == '') ? false : true;
  ?>

    <section class="project-hero">
      <div class="container">
        <div class="media-wrapper <?php if($hasVideo == false && $hasDeck == true) echo 'deck-only' ?>">
          <?php if($hasVideo): ?>
            <div class="media-wrap vimeo-wrapper active">
              <?php if( get_field('vimeo_embed_code') ){ the_field('vimeo_embed_code'); } ?>
            </div>
          <?php endif; ?>
          <?php if($hasDeck): ?>
            <div class="media-wrap deck-wrapper">
            <?php $deck = json_decode(curl('http://speakerdeck.com/oembed.json?url=' . get_field('speaker_deck_url')), true);
            if($deck){
              echo $deck['html'];
            } ?>
            </div>
          <?php endif; ?>
        </div>
        <?php if($hasVideo && $hasDeck): ?>
          <div class="media-toggle-wrapper">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <a class="toggle active" href="" media="vimeo">Video</a>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <a class="toggle" href="" media="deck">Click-Thru</a>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <section class="project-content">
      <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
      <div class="container cta">
        <a href="/our-work" class="btn-white btn-large">See More</a>
      </div>
    </section>

  <?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>