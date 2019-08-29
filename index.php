<?php get_header(); ?>
<?php
$args = array(
          'post_type' => 'post',
          'posts_per_page' => 7,
          'tag_slug__in' => array('css','craft')
        );
        $q = new WP_Query($args);

        while($q ->have_posts()): $q->the_post();

?>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="titlepart">
          <h2 style="font-size:20px;"><?php the_title(); ?></h2>
          <p style="padding-top:4px; border: 0 0 0 4px;  list-style-type: none;"><?php the_content(); ?></p>
          </div>
      </div>
      <div class="col-md-2">
        <div class="titlepart">
          <strong>Categories:</strong>
          <?php the_category(); ?>
          </div>
      </div>
      <div class="col-md-2">
        <div class="titlepart">
          <strong><?php the_tags(); ?></strong>

          </div>
      </div>
    </div>
</div>

<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
