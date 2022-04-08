<!-- Header -->
<?php get_header();?>

    <div class="container-fluid">
        <!-- Main Class -->
        <main class="tm-main">
            <!-- Search Loop -->
            <?php if (have_posts()): while (have_posts()): the_post();?>      
                <h3><?php the_title();?></h3>
                <?php the_content();?>

            <?php endwhile;else:endif;?>

<!-- Footer -->
<?php get_footer();?>

        </main>  
    </div>
                  