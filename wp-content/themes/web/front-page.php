<?php get_header() ?>
<div class="avt">
    <div class="container">
        <div class="col-md-3 col-sm-6 col-xs-12 bb1">
            <a href="#">
                <div class="img-left-avt">
                    <img src="https://mona.vn/wp-content/uploads/2022/07/13.png" alt="" class="b1-show">
                    <img src="https://mona.vn/wp-content/uploads/2022/07/13.png" alt="" class="b1-hover">
                </div>
                <div class="text-avt" style="border-right: none;">
                    <h4>CAM KẾT</h4>
                    <p>Sản Phẩm Đúng Như Mô Tả / Hình Ảnh</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 bb1">
            <a href="#">
                <div class="img-left-avt">
                    <img src="https://mona.vn/wp-content/uploads/2022/07/13.png" alt="" class="b1-show">
                    <img src="https://mona.vn/wp-content/uploads/2022/07/13.png" alt="" class="b1-hover">
                </div>
                <div class="text-avt" style="border-right: none;">
                    <h4>Mẫu Mã</h4>
                    <p>Mẫu Mã Đa Dạng, Mới Nhất</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 bb1">
            <a href="#">
                <div class="img-left-avt">
                    <img src="https://mona.vn/wp-content/uploads/2022/07/16.png" alt="" class="b1-show">
                    <img src="https://mona.vn/wp-content/uploads/2022/07/16.png" alt="" class="b1-hover">
                </div>
                <div class="text-avt" style="border-right: none;">
                    <h4>Giao Hàng Miễn Phí</h4>
                    <p>Freeship Toàn Quốc với đơn hàng từ 5000k</p>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 bb1">
            <a href="#">
                <div class="img-left-avt">
                    <img src="https://mona.vn/wp-content/uploads/2022/07/16.png" alt="" class="b1-show">
                    <img src="https://mona.vn/wp-content/uploads/2022/07/16.png" alt="" class="b1-hover">
                </div>
                <div class="text-avt" style="border-right: none;">
                    <h4>Ship COD</h4>
                    <p>An Tâm Nhận Hàng -> Thanh Toán</p>
                </div>
            </a>
        </div>
    </div>
</div>
<section class="sc sanpham1">
    <div class="container">
        <div class="hh">
            <a href="/category_san-pham/giay-dan-tuong">Xem tất cả</a>
            <h2><a href="/category_san-pham/giay-dan-tuong">Giấy dán tường</a></h2>
            <span></span>
        </div>
        <div class="row">
            <?php
            global $paged;
            $curpage = $paged ? $paged : 1;
            $args = array(
                'paged' => $curpage,
                'post_type' => 'san-pham', // You can add a custom post type if you like
                'posts_per_page' => 15, // limit of posts,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category_san-pham', // Đổi 'category' thành taxonomy của bạn nếu cần
                        'field' => 'slug',
                        'terms' => 'giay-dan-tuong',
                    ),
                ),
            );
            $primary_query = new WP_Query($args);
            wp_reset_query();
            query_posts($args);
            ?>
            <?php
            if (have_posts()): while (have_posts()) : the_post(); ?>
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
    </div>
</section>
<section class="sc sanpham1">
    <div class="container">
        <div class="hh">
            <a href="/category_san-pham/tranh-dan-tuong	">Xem tất cả</a>
            <h2><a href="/category_san-pham/tranh-dan-tuong	">Tranh dán tường</a></h2>
            <span></span>
        </div>
        <div class="row">
            <?php
            global $paged;
            $curpage = $paged ? $paged : 1;
            $args = array(
                'paged' => $curpage,
                'post_type' => 'san-pham', // You can add a custom post type if you like
                'posts_per_page' => 15, // limit of posts,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category_san-pham', // Đổi 'category' thành taxonomy của bạn nếu cần
                        'field' => 'slug',
                        'terms' => 'tranh-dan-tuong',
                    ),
                ),
            );
            $primary_query = new WP_Query($args);
            wp_reset_query();
            query_posts($args);
            ?>
            <?php
            if (have_posts()): while (have_posts()) : the_post(); ?>
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
    </div>
</section>



<section class="chuyen-muc">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="rlb-02">
                    <div class="t"><a href="/category/trang-tri-noi-that-dep">Trang Trí Nội Thất Đẹp</a></div>
                    <div class="g"><b></b></div>
                </div>
                <?php
                global $paged;
                $curpage = $paged ? $paged : 1;
                $args = array(
                    'paged' => $curpage,
                    'post_type' => 'post', // You can add a custom post type if you like
                    'posts_per_page' => 12, // limit of posts,
                    'category_name'=>'trang-tri-noi-that-dep'
                );
                $primary_query = new WP_Query($args);
                wp_reset_query();
                query_posts($args);
                ?>
                <?php
                if (have_posts()): while (have_posts()) : the_post(); ?>
                    <div class="wp-rlb" style="display: block;">
                        <div class="at-img">
                            <a href="<?php the_permalink();?>">
                                <?php if (get_the_post_thumbnail()): ?>
                                    <span><?php echo get_the_post_thumbnail(); ?></span>
                                <?php else: ?>
                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-no-img.jpg"></span>
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="text-at-img">
                            <a href="<?php the_permalink();?>"><?php the_title()?></a>
                            <?php the_excerpt();?>
                        </div>
                    </div>

                    <?php wp_reset_postdata(); endwhile;endif;?>


            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="rlb-02">
                    <div class="t"><a href="#">Follow Us On Zalo</a></div>
                    <div class="g"><b></b></div>
                </div>
                <div class="textwidget">
                    <p><iframe loading="lazy"
                               src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmonadecor999%2F&#038;tabs=timeline&#038;width=340&#038;height=500&#038;small_header=false&#038;adapt_container_width=true&#038;hide_cover=false&#038;show_facepile=true&#038;appId=1600651606651964"
                               style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                               allowTransparency="true" allow="encrypted-media"></iframe></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="rlb-02">
                    <div class="t"><a href="/category/tu-van-trang-tri-nha-cua	">Tư Vấn Trang Trí Nhà Cửa</a></div>
                    <div class="g"><b></b></div>
                </div>
                <?php
                global $paged;
                $curpage = $paged ? $paged : 1;
                $args = array(
                    'paged' => $curpage,
                    'post_type' => 'post', // You can add a custom post type if you like
                    'posts_per_page' => 12, // limit of posts,
                    'category_name'=>'tu-van-trang-tri-nha-cua	'
                );
                $primary_query = new WP_Query($args);
                wp_reset_query();
                query_posts($args);
                ?>
                <?php
                if (have_posts()): while (have_posts()) : the_post(); ?>
                    <div class="wp-rlb" style="display: block;">
                        <div class="at-img">
                            <a href="<?php the_permalink();?>">
                                <?php if (get_the_post_thumbnail()): ?>
                                    <span><?php echo get_the_post_thumbnail(); ?></span>
                                <?php else: ?>
                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-no-img.jpg"></span>
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="text-at-img">
                            <a href="<?php the_permalink();?>"><?php the_title()?></a>
                            <?php the_excerpt();?>
                        </div>
                    </div>

                    <?php wp_reset_postdata(); endwhile;endif;?>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>
