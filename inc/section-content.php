<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
);
$loop = new WP_Query($args);
while ( $loop->have_posts() ) {
    $loop->the_post();
    ?>
    <article class="col-12 col-md-6 tm-post">
    <hr class="tm-hr-primary">
    <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
    <p class="tm-pt-30"><?php the_content(); ?></p>
    <div class="d-flex justify-content-between tm-pt-45"></div>
</article>
    <?php
}

