<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); $sv = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>
    <div class="container">
        <div class="row ctsp">
            <div class="col-md-5 col-sm-12 col-xs-12 ctsp-01">
                <div class="bread3">

                    <ul class="breadcrumbs">
                        <li><a href="/">Trang chủ</a></li>
                        <li><?php the_title() ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="wp-bct">
                <div class="col-md-5 col-sm-5 col-xs-12 ctsp-04">
                    <div class="wp-stsp-04">
                        <div class="img-ctsp-1">
                            <?php
                            if ( has_post_thumbnail() ) {
                                $thumbnail_attr = array(
                                    'id' => 'myImg',
                                );
                                the_post_thumbnail( 'full', $thumbnail_attr );
                            }
                            ?>
                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <!-- The Close Button -->
                                <!-- Modal Content (The Image) -->
                                <img class="modal-content" id="img01">
                                <!-- Modal Caption (Image Text) -->
                                <div id="caption"></div>
                            </div>
                        </div>
                    </div>
                    <div class="wp-s04" style="background: url() no-repeat left top;">
                        <div class="t3">
                            <div class="dc">CAM KẾT SẢN PHẨM</div>
                            <div class="dc-t3">
                                <div class="textwidget">
                                    <div><em>&nbsp;Sản Phẩm Giống Mô Tả Và Hình Ảnh – Nếu Không Giống Mô Tả, Khách Hàng
                                            Có Quyền Không Nhận Hàng</em></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style type="text/css">
                    /* Style the Image Used to Trigger the Modal */
                    #myImg {
                        border-radius: 5px;
                        cursor: pointer;
                        transition: 0.3s;
                        object-fit: cover;
                    }

                    #myImg:hover {
                        opacity: 0.7;
                    }

                    /* The Modal (background) */
                    .modal {
                        display: none; /* Hidden by default */
                        position: fixed; /* Stay in place */
                        z-index: 99; /* Sit on top */
                        padding-top: 100px; /* Location of the box */
                        left: 0;
                        top: 0;
                        width: 100%; /* Full width */
                        height: 100%; /* Full height */
                        overflow: auto; /* Enable scroll if needed */
                        background-color: rgb(0, 0, 0); /* Fallback color */
                        background-color: rgba(0, 0, 0, 0.9); /* Black w/ opacity */
                    }

                    /* Modal Content (Image) */
                    .modal-content {
                        margin: auto;
                        display: block;
                        width: 80%;
                        max-width: 700px;
                    }

                    /* Caption of Modal Image (Image Text) - Same Width as the Image */
                    #caption {
                        margin: auto;
                        display: block;
                        width: 50%;
                        max-width: 700px;
                        text-align: center;
                        color: #ccc;
                        padding: 10px 0;
                        height: 200px;
                    }

                    /* Add Animation - Zoom in the Modal */
                    .modal-content, #caption {
                        -webkit-animation-name: zoom;
                        -webkit-animation-duration: 0.6s;
                        animation-name: zoom;
                        animation-duration: 0.6s;
                    }

                    @-webkit-keyframes zoom {
                        from {
                            -webkit-transform: scale(0)
                        }
                        to {
                            -webkit-transform: scale(1)
                        }
                    }

                    @keyframes zoom {
                        from {
                            transform: scale(0)
                        }
                        to {
                            transform: scale(1)
                        }
                    }

                    /* The Close Button */
                    .close {
                        position: absolute;
                        top: 15px;
                        right: 35px;
                        color: #f1f1f1;
                        font-size: 40px;
                        font-weight: bold;
                        transition: 0.3s;
                    }

                    .close:hover,
                    .close:focus {
                        color: #bbb;
                        text-decoration: none;
                        cursor: pointer;
                    }

                    /* 100% Image Width on Smaller Screens */
                    @media only screen and (max-width: 700px) {
                        .modal-content {
                            width: 100%;
                        }
                    }

                    .modal-content {
                        max-width: 600px;
                        width: 600px !important
                    }
                </style>
                <script type="text/javascript">
                    // Get the modal
                    var modal = document.getElementById('myModal');
                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementById('myImg');
                    var modalImg = document.getElementById("img01");
                    var captionText = document.getElementById("caption");
                    img.onclick = function () {
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    }
                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("modal")[0];
                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function () {
                        modal.style.display = "none";
                    }
                </script>
                <div class="wp-b3">
                    <div class="col-md-7 col-sm-7 col-xs-12 ctsp-05">
                        <div class="wp-b5">
                            <div class="cc">
                                <h1 class="product-name"><?php the_title() ?></h1>
                                <div class="product_meta">
                                    <?php
                                    if(get_field('ma_san_pham')):?>
                                        <span class="sku_wrapper">Mã: <span class="sku" itemprop="sku"><?php the_field('ma_san_pham');?></span></span>
                                    <?php endif;?>
                                </div>
                                <div class="a">
                                    <span class="special-price"><span class="price product-price">  <a rel="nofollow" href="tel:0363293000" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Liên hệ</a></span> </span>
                                    <!-- Giá Khuyến mại --></div>
                                <del><span class="old-price"><span
                                                class="price product-price-old">  <a rel="nofollow" href="tel:0363293000" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Liên hệ</a></span> </span></del>
                                <!-- Giá gốc -->
                                <div class="a">
                                </div>
                                <div class="product_content hidden-sm-down">
                                    <h5 class="fw_600"><b>Mô tả </b></h5>
                                    <div itemprop="description" class="cl_old">
                                        <!--                                        <ul>-->
                                        <!--                                            <li>Decal Dán Tường Hàng xuất khẩu chất lượng cao, dễ dàng thi công với keo dán mặt sau và hình nhỏ hướng dẫn</li>-->
                                        <!--                                            <li>Giao hàng toàn quốc, thanh toán tại nhà</li>-->
                                        <!--                                            <li>Ship COD Toàn Quốc Đồng Giá 30K</li>-->
                                        <!--                                        </ul>-->
                                    </div>
                                </div>
                                <div class="product_pre_buy">
                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <div class="form-group fix-margin">
                                                <form class="cart" id="add-to-cart-form" method="post"
                                                      enctype="multipart/form-data">
                                                    <div class="actions-qty">
                                                        <!--                                                        <div class="m">-->
                                                        <!--                                                            <button type="submit"><span class="n">Mua ngay</span></button>-->
                                                        <!--                                                            <a class="k" href="#" rel="nofollow"><span>Hướng dẫn mua hàng</span></a>-->
                                                        <!--                                                        </div>-->
                                                        <style>
                                                            .button-aff {
                                                                margin-bottom: 0;
                                                                background: #ff0000;
                                                                border-radius: 5px;
                                                                font-size: 16px;
                                                                color: white;
                                                            }
                                                        </style>
                                                        <!--                                                        <a class="button button-aff" href="https://shope.ee/9ejgWnTTMG" target="blank">Mua trên shopee</a>-->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--                                <h3>CHÍNH SÁCH GIAO HÀNG</h3>-->
<!--                                <div class="o">FreeShip Nội Thành Hà Nội Với Đơn Hàng Từ 2.000K</div>-->
<!--                                <div class="o">FreeShip Toàn Quốc Với Đơn Hàng Từ 3.000K Và Chuyển Khoản Trước</div>-->
<!--                                <div class="o"><font color="red"><strong>STK: 999 999 979 8888 - Chủ TK: Lê Thị Xuân Mai-->
<!--                                            - Ngân hàng MB Bank Chi Nhánh Hà Nội</strong></font></div>-->
<!--                                <hr>-->

                            </div>
                            <div class="rr">
                                <div class="online_support block">
                                    <div class="new_title">
                                        <h2>HỖ TRỢ TRỰC TUYẾN</h2>
                                    </div>
                                    <div class="block-content">
                                        <hr>
                                        <div class="sp_2">
                                            <p><span><a style="color:red ; font-size: 20px ; font-weight: bold"
                                                        href="tel:0363293000">Tel: 0363 293 000</a></span></p>
                                        </div>
                                        <hr>
                                        <div class="sp_2">
                                            <p><span><a href="https://zalo.me/0363293000"><img
                                                                src="https://mona.vn/wp-content/uploads/icon/icon-zalo.png"
                                                                height="50"></a></span></p>
                                        </div>
                                        <hr>
                                        <div class="sp_2">
                                            <p><span><a href="https://www.messenger.com/t/monadecor999"><img
                                                                src="https://mona.vn/wp-content/uploads/icon/messenger.jpg"
                                                                height="50"></a></span></p>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                                <div class="sb-04 tome">
                                    <div class="fb-page fb_iframe_widget" data-height="260px"
                                         data-href="https://www.facebook.com/monadecor999" data-tabs="timeline"
                                         data-small-header="false" data-adapt-container-width="true"
                                         data-hide-cover="false" data-show-facepile="false" fb-xfbml-state="rendered"
                                         fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=282&amp;height=260&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fmonadecor999&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=false&amp;small_header=false&amp;tabs=timeline">
                                        <span style="vertical-align: bottom; width: 282px; height: 260px;"><iframe
                                                    name="f11626b79c91364" width="1000px" height="260px"
                                                    data-testid="fb:page Facebook Social Plugin"
                                                    title="fb:page Facebook Social Plugin" frameborder="0"
                                                    allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                    allow="encrypted-media"
                                                    src="https://www.facebook.com/v8.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1d84570d1d5a4%26domain%3Dmona.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fmona.vn%252Ff86ba465bf87c8%26relation%3Dparent.parent&amp;container_width=282&amp;height=260&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fmonadecor999&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=false&amp;small_header=false&amp;tabs=timeline"
                                                    style="border: none; visibility: visible; width: 282px; height: 260px;"
                                                    class=""></iframe></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="content-dm ctsp-main">
        <div class="container">
            <div class="row">
                <?php get_sidebar()?>
                <div class="col-md-9 col-sm-12 col-xs-12 ct-right">
                    <div class="wp-006">
                        <div class="tab">
                            <button class="tablinks active" onclick="openCity(event, 'ttsp0')" id="defaultOpen">Thông
                                tin sản phẩm
                            </button>
                        </div>
                        <div id="ttsp0" class="tabcontent" style="display: block;">
                            <?php the_content();?>
                        </div>

                        <div class="dshd" style="margin-top:10px;">
                            <div class="botton-share-fb">
                                <a rel="nofollow"
                                   href="https://www.facebook.com/share.php?u=<?php echo $sv;?>&amp;title=Decal Dán Tường Dây Treo Chúc Ngủ Ngon"
                                   target="socialbookmark">
                                    <img src="https://mona.vn/wp-content/themes/vpwtheme-ver2/images/f.gif">
                                </a>
                            </div>
                            <span class="h"></span>
                            <div style="height:10px; overflow:hidden;"></div>
                            <a class="r" rel="nofollow" href="https://www.facebook.com/share.php?u=&amp;title="
                               target="socialbookmark"></a>
                            <div style="margin-left:10px;" class="fb-like fb_iframe_widget" data-send="false"
                                 data-layout="box_count" data-width="60" data-show-faces="false"
                                 fb-xfbml-state="rendered"
                                 fb-iframe-plugin-query="app_id=&amp;container_width=851&amp;href=https%3A%2F%2Fmona.vn%2Fdecal-dan-tuong-day-treo-chuc-ngu-ngon%2F&amp;layout=box_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=60">
                                <span style="vertical-align: bottom; width: 62px; height: 48px;"><iframe
                                            name="f12368285252568" width="60px" height="1000px"
                                            data-testid="fb:like Facebook Social Plugin"
                                            title="fb:like Facebook Social Plugin" frameborder="0"
                                            allowtransparency="true" allowfullscreen="true" scrolling="no"
                                            allow="encrypted-media"
                                            src="https://www.facebook.com/v8.0/plugins/like.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1c6731a40923%26domain%3Dmona.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fmona.vn%252Ff86ba465bf87c8%26relation%3Dparent.parent&amp;container_width=851&amp;href=https%3A%2F%2Fmona.vn%2Fdecal-dan-tuong-day-treo-chuc-ngu-ngon%2F&amp;layout=box_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=60"
                                            style="border: none; visibility: visible; width: 62px; height: 48px;"
                                            class=""></iframe></span></div>
                            <div class="g-plusone" data-size="tall"></div>
                        </div>
                        <div>
                            <fb:comments href="" num_posts="8" colorscheme="light" width="100%"
                                         class=" fb_iframe_widget fb_iframe_widget_fluid_desktop" style="width: 100%;"
                                         fb-xfbml-state="rendered"
                                         fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=863&amp;height=100&amp;href=http%3A&amp;locale=vi_VN&amp;sdk=joey&amp;skin=light&amp;title=Decal%20D%C3%A1n%20T%C6%B0%E1%BB%9Dng%20D%C3%A2y%20Treo%20Ch%C3%BAc%20Ng%E1%BB%A7%20Ngon%20%E2%8B%86%20Decal%20D%C3%A1n%20T%C6%B0%E1%BB%9Dng%20D%C3%A2y%20Treo%20Ch%C3%BAc%20Ng%E1%BB%A7%20Ngon%20Gi%C3%A1%20R%E1%BA%BB&amp;url=https%3A%2F%2Fmona.vn%2Fdecal-dan-tuong-day-treo-chuc-ngu-ngon%2F&amp;version=v8.0&amp;width=&amp;xid=https%253A%252F%252Fmona.vn%252Fdecal-dan-tuong-day-treo-chuc-ngu-ngon%252F">
                                <span style="vertical-align: top; width: 100%; height: 0px; overflow: hidden;"><iframe
                                            name="fc268960fcbd7" width="1000px" height="100px"
                                            data-testid="fb:comments Facebook Social Plugin"
                                            title="fb:comments Facebook Social Plugin" frameborder="0"
                                            allowtransparency="true" allowfullscreen="true" scrolling="no"
                                            allow="encrypted-media"
                                            src="https://www.facebook.com/v8.0/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2e6e4b7b3d663%26domain%3Dmona.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fmona.vn%252Ff86ba465bf87c8%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=863&amp;height=100&amp;href=http%3A&amp;locale=vi_VN&amp;sdk=joey&amp;skin=light&amp;title=Decal%20D%C3%A1n%20T%C6%B0%E1%BB%9Dng%20D%C3%A2y%20Treo%20Ch%C3%BAc%20Ng%E1%BB%A7%20Ngon%20%E2%8B%86%20Decal%20D%C3%A1n%20T%C6%B0%E1%BB%9Dng%20D%C3%A2y%20Treo%20Ch%C3%BAc%20Ng%E1%BB%A7%20Ngon%20Gi%C3%A1%20R%E1%BA%BB&amp;url=https%3A%2F%2Fmona.vn%2Fdecal-dan-tuong-day-treo-chuc-ngu-ngon%2F&amp;version=v8.0&amp;width=&amp;xid=https%253A%252F%252Fmona.vn%252Fdecal-dan-tuong-day-treo-chuc-ngu-ngon%252F"
                                            style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span>
                            </fb:comments>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sc sanphamlq">
        <div class="container">
            <div class="hh"><h2><a href="#">Sản phẩm trang trí cùng loại</a></h2><span></span></div>
            <div class="row">
                <?php
                $terms = get_the_terms(get_the_ID(), 'category_san-pham');
                $term_ids = array();
                foreach ($terms as $term) {
                    $term_ids[] = $term->term_id;
                }

                $args = array(
                    'post_type' => 'san-pham',
                    'posts_per_page' => 12,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category_san-pham',
                            'field' => 'term_id',
                            'terms' => $term_ids,
                            'operator' => 'IN',
                        ),
                    ),
                    'orderby'        => 'modified',
                    'order'          => 'DESC',
                    'suppress_filters' => false,
                    'post__not_in' => array(get_the_ID()),
                );

                $related_posts = get_posts($args);?>

                <?php
                if ($related_posts) {?>
                    <?php
                    foreach ($related_posts as $post) { setup_postdata($post);?>
                        <div class="col-md-3 col-sm-6 col-xs-6 wp-b2">
                            <div class="tooltiphost">
                                <div class="thumbnail-item-tooltip" style="z-index: 1;">
                                    <a href="<?php the_permalink()?>">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            $thumbnail_attr = array(
                                                'class' => 'thumbnail-tooltip',
                                            );
                                            the_post_thumbnail( 'full', $thumbnail_attr );
                                        }
                                        ?>
                                    </a>
                                    <strong><a href="<?php the_permalink();?>"><?php the_title()?></a></strong>
                                    <a rel="nofollow" href="tel:0363293000" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Liên hệ</a>
                                    <div class="tooltip2" style="top: 363.219px; left: 287.5px; display: none;">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            $thumbnail_attr = array(
                                                'class' => 'thumbnail-tooltip',
                                            );
                                            the_post_thumbnail( 'full', $thumbnail_attr );
                                        }
                                        ?>
                                        <span class="overlay-tooltip"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } wp_reset_postdata();?>

                <?php }?>


            </div>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>