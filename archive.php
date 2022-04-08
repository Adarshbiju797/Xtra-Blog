<?php get_header();?>


<div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <form class="form-inline tm-mb-80 tm-search-form">                
                        <?php get_search_form(); ?>       
            </form>      
            
            <?php get_template_part('inc/section','archive');?>

            
            
          

<?php get_footer();?>
</div>
</div>