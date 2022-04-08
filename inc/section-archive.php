<?php
    if ( have_posts() ) 
        {
        // Load posts loop.
        while ( have_posts() ) 
        {
            the_post();
        }
    
?>
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">
                            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
                            <p class="tm-pt-30"><?php the_content(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-success" >READ MORE </a>
                            <div class="d-flex justify-content-between tm-pt-45"></div>
                    </article>

    <?php
            }
?>
 <?php previous_posts_link(); ?>
            <?php next_posts_link(); ?>