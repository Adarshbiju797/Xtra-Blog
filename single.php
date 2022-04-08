<?php get_header();?>


<div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <form class="form-inline tm-mb-80 tm-search-form">                
                        <?php get_search_form(); ?>       
            </form>      
            
            <?php if (have_posts()): while (have_posts()): the_post();?>      
            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
            <p class="tm-pt-30"><?php the_content(); ?></p>

		<?php endwhile;else:endif;?>



            

<?php get_footer();?>
</div>
            </div>