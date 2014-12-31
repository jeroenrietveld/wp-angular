<?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class() ?>>
      <?php var_dump(get_field('location')); ?>
      <?php
        ?>
      <?php the_title(); ?>
	    <?php the_content(); ?>
	  </div>
	<?php
    endwhile;
  endif;
