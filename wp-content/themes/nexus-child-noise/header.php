<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Noise</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
    <!-- Bootstrap -->
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <header class="st-navbar">
        <div class="container">
            <div class="nav-toggle"></div>
            <nav>
                <a href="/">
                    <img src="<?php echo child_template_directory ?>/images/icon-nav.png" class="nav-icon" alt="Main Menu" />
                </a>
                <ul>
                    <li><a <?php if(is_home()): ?>class="internal" href="mantra"<?php else: ?>href="/#mantra"<?php endif; ?>>Mantra</a></li>
                    <li><a <?php if(is_home()): ?>class="internal" href="services"<?php else: ?>href="/#services"<?php endif; ?>>Services</a></li>
                    <li><a href="/our-work">Work</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>