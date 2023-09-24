<?php get_header(); ?>
<div class="woocommerce ">
<section class="content-dm ">
    <div class="container">
        <div class="row">
            <?php get_sidebar()?>
            <div class="col-md-9 col-sm-12 col-xs-12 ct-right">
                <div class="ctr-01">
                    <h1 class="tt-ctr-01"><?php get_queried_object()->name?></h1>

                </div>
                <div class="clear"></div>
                <div class="sc sp-ctr">
                    <div class="row">

                        <?php
                        global $paged;
                        $curpage = $paged ? $paged : 1;
                        $posts_per_page = 40;
                        $current_term = get_queried_object();
                        $args = array(
                            'post_type' => 'san-pham', // Thay 'post' bằng tên của custom post type nếu cần thiết
                            'posts_per_page' => $posts_per_page,
                            'paged' => $curpage,
                            'orderby'        => 'modified',
                            'order' => 'DESC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => $current_term->taxonomy,
                                    'field' => 'term_id',
                                    'terms' => $current_term->term_id,
                                ),
                            ),
                        );
                        wp_reset_query();
                        query_posts($args);
                        ?>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                        <?php endwhile;endif;?>
                    </div>
                    <nav>
                        <nav class="woocommerce-pagination">
                            <?php wpbeginner_numeric_posts_nav()?>
                        </nav>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>
