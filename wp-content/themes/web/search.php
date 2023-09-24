<?php get_header(); ?>
<div class="container">
<?php if (have_posts()) : ?>
<div class="row" style="margin-top: 50px;">
    <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-s3 col-sm-4 col-xs-6 wp-b2">
            <div class="tooltiphost">
                <div class="thumbnail-item-tooltip">
                    <a href="<?php the_permalink();?>"><?php
                        if ( has_post_thumbnail() ) {
                            $thumbnail_attr = array(
                                'class' => 'thumbnail-tooltip',
                            );
                            the_post_thumbnail( 'full', $thumbnail_attr );
                        }
                        ?></a>
                    <strong><a href="<?php the_permalink();?>"><?php the_title()?></a></strong>
                    <?php
                    if(get_field('ma_san_pham')):?>
                        <span class="ma">MSP: <?php the_field('ma_san_pham');?></span>
                    <?php endif;?>

                    <br>
                    <div class="tooltip2">
                        <?php the_post_thumbnail();?>
                        <span class="overlay-tooltip"><?php the_title()?></span>
                    </div>
                </div>
            </div>
            <div class="muahang">
                <a rel="nofollow" href="tel:0363293000" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Liên hệ</a>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<br>
<br>
<?php else : ?>
    <article id="post-0" class="post no-results not-found">
        <header class="header">
            <h1 class="entry-title" itemprop="name"><?php esc_html_e('Nothing Found', 'blankslate'); ?></h1>
        </header>
        <div class="entry-content" itemprop="mainContentOfPage">
            <p><?php esc_html_e('Sorry, nothing matched your search. Please try again.', 'blankslate'); ?></p>
            <?php get_search_form(); ?>
        </div>
    </article>

<?php endif; ?>
</div>
<?php get_footer(); ?>