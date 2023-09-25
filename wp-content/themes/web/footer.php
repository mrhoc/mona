<section class="dm-sp">
    <div class="container">
        <ul class="t">
            <li class="a">Danh mục sản phẩm</li>
            <li class="b"></li>
        </ul>
        <div class="row">
            <div class="col-md-6 ">
                <h5>Giấy dán tường</h5>
                <div class="menu-do-trang-tri-nha-cua-container">
                    <ul id="menu-do-trang-tri-nha-cua" class="menu">
                        <?php
                        global $paged;
                        $curpage = $paged ? $paged : 1;
                        $args = array(
                            'paged' => $curpage,
                            'post_type' => 'san-pham', // You can add a custom post type if you like
                            'posts_per_page' => 5, // limit of posts,
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
                            <li><a href="<?php the_permalink();?>"><?php the_title()?></a></li>
                        <?php endwhile;endif;?>


                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h5>Tranh dán tường</h5>
                <div class="menu-decal-dan-tuong-container">
                    <ul id="menu-decal-dan-tuong" class="menu">
                        <?php
                        global $paged;
                        $curpage = $paged ? $paged : 1;
                        $args = array(
                            'paged' => $curpage,
                            'post_type' => 'san-pham', // You can add a custom post type if you like
                            'posts_per_page' => 5, // limit of posts,
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
                            <li><a href="<?php the_permalink();?>"><?php the_title()?></a></li>
                        <?php endwhile;endif;?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 ff1"
                 style="background: #000">
                <h4>VỀ GIẤY DÁN TƯỜNG 3SAO</h4>
                <div class="textwidget">
                    <div class="four columns">
                        <div class="gdlr-item gdlr-column-service-item gdlr-type-3">
                            <div class="column-service-content-wrapper">
                                <div class="column-service-content gdlr-skin-content">
                                    <p><em>Với sự đa dạng sản phẩm tại GIẤY DÁN TƯỜNG 3SAO – Đồ trang trí nhà cửa đẹp sẽ giúp
                                            ngôi nhà bạn như biết nói. Thể hiện đẳng cấp và style thẩm mỹ của bạn.
                                            Để bạn có thể tự hào với tất cả mọi người về tài trang trí nội thất nhà
                                            tuyệt đẹp của mình!</em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="four columns"></div>
                </div>

            </div>
            <div class="col-md-5 col-sm-6 col-xs-12 ff2">
                <div class="ff2-1">
                    <h4>Dành Cho Khách Hàng</h4>
                    <div class="menu-danh-cho-khach-hang-container">
                        <ul id="menu-danh-cho-khach-hang" class="menu">
                            <li id="menu-item-18084"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18084"><a
                                        href="#">Chính Sách Bảo Hành</a></li>
                            <li id="menu-item-18085"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18085"><a
                                        href="#">Chương Trình Khuyến Mãi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="ff2-1">
                    <h4>Về Giấy dán tường 3sao</h4>
                    <div class="menu-ve-cong-ty-container">
                        <ul id="menu-ve-cong-ty" class="menu">
                            <li id="menu-item-3547"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3547"><a
                                        href="/gioi-thieu/">Giới thiệu</a></li>
                            <li id="menu-item-3548"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3548"><a
                                        href="/lien-he/">Liên hệ</a></li>
                            <li id="menu-item-3549"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3549">
                                <a href="/tin-tuc/">Tin tức</a></li>

                        </ul>
                    </div>
                </div>
                <div class="ftt-012">
                    <h3>HÃY GỌI HOTLINE ĐỂ ĐƯỢC TƯ VẤN</h3>
                    <div class="textwidget">
                        <h4>Hỗ trợ <b>0363.293.000</b></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 ff4">
                <h4 class="tt-ft">ĐỊA CHỈ Giấy dán tường 3sao</h4>
                <div class="textwidget">
                    <p><i class="fa fa-caret-right"></i>Trụ Sở Chính:<br />
                        Địa chỉ: 144 Trần Phú, P. Mộ Lao, Hà Đông, Hà Nội<br />
                        Hotline: 0363.293.000<br />
                        Email: tvh271@gmail.com<i class="fa fa-caret-right"></i></p>
                    <p class="end-a"><i class="fa fa-caret-right"></i>Mở cửa từ 8:00 đến 18:00</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="back-tt">
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-arrow-circle-up"></i></a>
</div>



<script type='text/javascript' src='https://mona.vn/wp-content/themes/vpwtheme-ver2/js/jquery.min.js?ver=6.2.2'
        id='script_2-js'></script>
<script type='text/javascript' src='https://mona.vn/wp-content/themes/vpwtheme-ver2/js/bootstrap.min.js?ver=6.2.2'
        id='script_3-js'></script>
<script type='text/javascript' src='https://mona.vn/wp-content/themes/vpwtheme-ver2/js/owl.carousel.js?ver=6.2.2'
        id='script_4-js'></script>
<script>
    $(".icon-menu-mobile").click(function () {
        $(".show-click").slideToggle("slow", function () {
        });
    });
</script>
<script>
    if (jQuery(window).width() < 800) {
        jQuery("#menu-danh-muc-san-pham li.menu-item-has-children > a").click(function () {
            var li = $(this).parent();
            if (li.hasClass("selected-ip")) {
                li.removeClass('selected-ip');
            }
            else {
                var licha = li.parent().parent();
                if (licha.hasClass("selected-ip")) {
                    li.addClass("selected-ip");
                } else {
                    // Xóa class selected khỏi các thẻ li khác
                    $('#menu-danh-muc-san-pham li.menu-item-has-children').removeClass('selected-ip');
                    // Thêm class selected vào thẻ li hiện tại
                    li.addClass("selected-ip");
                }
            }
            // return false nghĩa là cho trang đứng im
            return false;
        });
    }
</script>
<!-- js back to top -->
<script type="text/javascript">
    if ($('#back-to-top').length) {
        var scrollTrigger = 800, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
</script>
<!-- end back to top -->
<script>
    $('#nnt').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>
<script>
    $('#b1-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>
<script type="text/javascript">
    // Load this script once the document is ready
    $(document).ready(function () {
        // Get all the thumbnail
        $('div.thumbnail-item-tooltip').mouseenter(function (e) {
            // Calculate the position of the image tooltip
            x = e.pageX - $(this).offset().left;
            y = e.pageY - $(this).offset().top;
            // Set the z-index of the current item,
            // make sure it's greater than the rest of thumbnail items
            // Set the position and display the image tooltip
            $(this).css('z-index', '15')
                .children("div.tooltip2")
                .css({ 'top': y + 10, 'left': x + 20, 'display': 'block' });
        }).mousemove(function (e) {
            // Calculate the position of the image tooltip
            x = e.pageX - $(this).offset().left;
            y = e.pageY - $(this).offset().top;
            // This line causes the tooltip will follow the mouse pointer
            $(this).children("div.tooltip2").css({ 'top': y + 10, 'left': x + 20 });
        }).mouseleave(function () {
            // Reset the z-index and hide the image tooltip
            $(this).css('z-index', '1')
                .children("div.tooltip2")
                .animate({ "opacity": "hide" }, "fast");
        });
    });
</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<script type="text/javascript">
    $(".showlogin").attr("href", "/tai-khoan/")
    $(".showcoupon").attr("href", "/gio-hang/")
</script>

<script type="text/javascript">
    $('.thumbnail-tooltip').each(function () {
        var $img = $(this),
            imgWidth = $img.width(),
            imgHeight = $img.height();
        if (imgWidth > imgHeight) {
            $img.height(imgWidth);
        } else {
            $img.height(imgWidth);
        }
    });
</script>
</body>

</html>