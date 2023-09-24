<?php get_header() ?>

    <div class="container">
        <div class="bread3">
            <ul id="breadcrumbs" class="breadcrumbs">
                <li class="item-home"><a class="bread-link bread-home" href="/" title="Trang chủ">Trang chủ</a></li>
                <li class="separator separator-home"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="item-cat"><a href="/tin-tuc/">Tin tức</a></li>
                <li class="separator"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="item-current item-21572"><strong class="bread-current bread-21572"
                                                            title="<?php the_title() ?>"><?php the_title() ?></strong>
                </li>
            </ul>
        </div>
    </div>
    <section class="content-dm">
        <div class="container">
            <div class="row">
                <?php get_sidebar()?>
                <div class="col-md-9 col-sm-12 col-xs-12 ct-right list">
                    <div class="bgg">
                        <h1 class="tt-ctr-01">Những Điều Cần Biết Trước Khi Mua Decal Dán Tường</h1>
                        <div class="detail-single">
                            <?php
                            if (have_posts()): while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                                <?php wp_reset_postdata(); endwhile;endif; ?>
                            <br>
                            <br>


                        </div>
                        <div style="color:#003399;font-weight:bold;font-size:13px;border-bottom:solid 1px #9dc900;height:25px; padding:0px 5px;">
                            <div style="float:right;">
                                <a rel="nofollow"
                                   href="https://www.facebook.com/share.php?u=https://mona.vn/nhung-dieu-can-biet-truoc-khi-mua-decal-dan-tuong/&amp;title=Những Điều Cần Biết Trước Khi Mua Decal Dán Tường"
                                   target="socialbookmark"><img title="Submit Thread to Facebook"
                                                                src="https://mona.vn/wp-content/themes/vpwtheme-ver2/images/facebook.gif"
                                                                alt="Submit Thread to Facebook"></a>
                                <a rel="nofollow"
                                   href="https://twitter.com/home?status=Những Điều Cần Biết Trước Khi Mua Decal Dán Tường - https://mona.vn/nhung-dieu-can-biet-truoc-khi-mua-decal-dan-tuong/"
                                   target="socialbookmark"><img title="Submit Thread to Twitter"
                                                                src="https://mona.vn/wp-content/themes/vpwtheme-ver2/images/twitter.png"
                                                                alt="Submit Thread to Twitter"></a>
                                <a rel="nofollow"
                                   href="https://www.google.com/bookmarks/mark?op=edit&amp;output=popup&amp;bkmk=https://mona.vn/nhung-dieu-can-biet-truoc-khi-mua-decal-dan-tuong/&amp;title=Những Điều Cần Biết Trước Khi Mua Decal Dán Tường"
                                   target="socialbookmark"><img title="Submit Thread to Google"
                                                                src="https://mona.vn/wp-content/themes/vpwtheme-ver2/images/google.gif"
                                                                alt="Submit Thread to Google"></a>
                            </div>
                            <img src="https://mona.vn/wp-content/themes/vpwtheme-ver2/images/awaiting.gif"
                                 style="vertical-align:middle;" alt="icon"> Các tin tức khác
                        </div>

                        <?php
                        global $paged;
                        $curpage = $paged ? $paged : 1;
                        $args = array(
                            'paged' => $curpage,
                            'post_type' => 'post', // You can add a custom post type if you like
                            'posts_per_page' => 12, // limit of posts,

                        );
                        $primary_query = new WP_Query($args);
                        wp_reset_query();
                        query_posts($args);
                        ?>
                        <?php
                        if (have_posts()): while (have_posts()) : the_post(); ?>
                            <div style="padding:3px 5px;"><a href="<?php the_permalink(); ?>"><img
                                            src="https://mona.vn/wp-content/themes/vpwtheme-ver2/images/icon4.gif"
                                            style="vertical-align:middle;" alt="icon"> <?php the_title() ?></a></div>

                            <?php wp_reset_postdata(); endwhile;endif; ?>
                        <div class="cl"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer() ?>