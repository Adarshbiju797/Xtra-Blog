<?php
/* Template Name:  Block Quote
*/
?>
<?php get_header(); ?> 


<div class="container-fluid">
    <main class="tm-main">
        <div class="row tm-row">
            <?php
            if (have_rows('block_quote')) :
                while (have_rows('block_quote')) : the_row();
                    $image = get_sub_field('image');
                    $quote = get_sub_field('quote');
                    $author = get_sub_field('credits');
            ?>
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">
                        <a class="effect-lily tm-post-link tm-pt-60" href="<?php the_permalink() ?>">
                            <div class="tm-post-link-inner">
                                <img src="<?php echo $image['url']; ?>" alt="Image" class="img-fluid">
                            </div>
                        </a>
                        <p class="tm-pt-30">
                            <?php echo $quote;  ?>
                        </p>
                        </a>
                        <p class="tm-pt-30">
                            <?php echo $author;  ?>
                        </p>
                    </article>
            <?php endwhile;
            endif;
            ?>

<?php get_footer(); ?> 
        </div>
    </main>
</div>
