
<?php get_header(); ?> 

    <div class="container-fluid">
            <main class="tm-main">

            <form class="form-inline tm-mb-80 tm-search-form">                
                        <?php get_search_form(); ?>       
            </form>    

                <div class="row tm-row">
            
                        <?php get_template_part('inc/section','content');?>

                </div>
                <div class="row tm-row tm-mt-100 tm-mb-75">
                    <div class="tm-prev-next-wrapper">
                        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                    </div>
                    <div class="tm-paging-wrapper">
                        <span class="d-inline-block mr-3">Page</span>
                        <nav class="tm-paging-nav d-inline-block">
                            <ul>
                                <li class="tm-paging-item active">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                                </li>
                                <li class="tm-paging-item">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                                </li>
                                <li class="tm-paging-item">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                                </li>
                                <li class="tm-paging-item">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                                </li>
                            </ul>
                        </nav>
                    </div>                
                </div>            
<?php get_footer();            
    