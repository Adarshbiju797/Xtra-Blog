<?php
get_header();
?>

<div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                        
                        <header class="page-header">
                <h1 class="page-title"><?php _e( 'Result Not Found', 'twentythirteen' ); ?></h1>
            </header>
 
            <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>
 
                    
                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->
            
            <form class="form-inline tm-mb-80 tm-search-form">                
                        <?php get_search_form(); ?>       
            </form>

                </div>                
            </div>
    
<?php
get_footer();
?>