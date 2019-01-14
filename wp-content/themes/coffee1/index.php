  <?php
  	get_header();
  ?>
  
  <?php get_template_part('templates/nav', 'front'); ?>
  
  <body>
    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?= get_template_directory_uri() ?>/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animated">
            	<h1 class="mb-3 mt-5 bread">Blog</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Blog</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
        <?php
            $args = array(
              'posts_per_page' => 1,
              'post_type' => array('post'),
                'tax_query' => array( 
                    array(
                        'taxonomy' => 'post_format',
                        'field' => 'slug',
                        'terms' => array(
                                'post-format-gallery', 
                                'post-format-link', 
                                'post-format-image', 
                                'post-format-quote', 
                                'post-format-audio', 
                                'post-format-video'
                        ),
                        'operator' => 'NOT IN'
                    )
                )
            );
            
            $post_destacado = new WP_Query($args);
            if ($post_destacado->have_posts()) {
              $post_destacado->the_post();
              $ID_destacado = $post->ID;
            ?>
            <h3 class="heading mt-2"><a href="#"><?= the_title();?></a></h3>  
        <?php
            }
            wp_reset_postdata();
        ?>
      </div>
        <?php
          $args = array(
            'posts_per_page' => 5,
            'post__not_in' => array($ID_destacado),
          );
          
          $custom_query = new WP_Query($args);
          while ($custom_query->have_posts()) {
            $custom_query->the_post();
            
        ?>
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animated">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20" style="background-image: url('< ?= get_template_directory_uri() ?>/images/image_1.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 28, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#"><?= the_title();?></a></h3>
                <!--<p>< ?= the_excerpt(); ?></p>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
      }
      WP_reset_postdata();
    ?>
    <!--</section>-->
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      <!--</div>-->
    </section>
    
<?php
  	get_footer();
?>
  
