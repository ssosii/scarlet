<section id="blog">

    <div class="blog__container">

        <p class="title">Ostatnio na <em>blogu</em></p>

    </div>


    <div class="blog__container container">




        <?php
  $inc = 1;
  $the_query = new WP_Query();
  $the_query->query("posts_per_page=4");
  if ($the_query->have_posts()) : 
  while($the_query->have_posts()) : $the_query->the_post();

  if($inc == 1){ 
    $trimmed_content = wp_trim_words( get_the_content(), 34 );?>
        <div class="blog__container-element">

            <div class="picture"
                style="background:url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>)"> </div>

            <div style=" flex-grow: 1;
    justify-content: center;
    align-items: start;
    display: flex;
    flex-direction: column;
    padding:20px;flex-basis:40%;">
                <div class="title ">
                    <?php echo get_the_title(); ?>
                </div>
                <div class="content">
                    <p><?php echo $trimmed_content; ?></p>
                </div>
                <div class="button">

                    <p> <a href="<?php the_permalink(); ?>">Czytaj dalej</a></p>
                </div>
            </div>



        </div>
        <?php  }
 else{
    $trimmed_content = wp_trim_words( get_the_content(), 12 );  ?>

        <div class="blog__container-element">

            <div class="picture"
                style="background:url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>)"> </div>
            <div class="title ">
                <?php echo get_the_title(); ?>
            </div>
            <div class="content">
                <p><?php echo $trimmed_content; ?></p>
            </div>
            <div class="button"><a href="<?php the_permalink(); ?>"> <img
                        src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" /></a>

            </div>


        </div>

        <?php }

 $inc++; 
 endwhile; 
 endif; 
 wp_reset_postdata();

 ?>

    </div>




</section>