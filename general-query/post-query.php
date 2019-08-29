<?php
$args = array(
          'post_type' => 'post',
          'posts_per_page' => 7,

        );
        $q = new WP_Query($args);

        while ($q ->have_posts()): $q->the_post();

?>
