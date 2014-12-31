<?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array('post_type' => 'news-article', 'paged' => $paged);
$query = new WP_Query($args);

//$page = get_page(get_the_id());
?>
<h1><?php the_title(); ?></h1>
<ul>
  <?php
  if ($query->have_posts()) :
    //$query->paginate_links();
    //$query->posts_nav_link();
    while ($query->have_posts()) : $query->the_post(); ?>
    <li>
      <?php echo wp_get_attachment_image(get_field('image'), 'archive-thumb'); ?>
      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </li>
    <?php endwhile; endif; ?>
</ul>
<?php
echo paginate_links( array(
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $query->max_num_pages
) );
?>
<?php wp_reset_postdata(); ?>
<div>
  <?php
  //echo apply_filters('the_content', $page->post_content); 
  the_content();
  ?>
</div>
