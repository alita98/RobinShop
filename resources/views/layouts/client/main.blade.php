<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Robin - Furniture eCommerce Bootstrap4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @include('layouts.client.css')

</head>

<body>
    @include('layouts.client.header')
    
    @include('layouts.client.slider')

    @include('layouts.client.body')

    @include('layouts.client.footer')

    <!--====================  offcanvas items ====================-->

    <!--=======  offcanvas mobile menu  =======-->

    <div class="offcanvas-mobile-menu" id="offcanvas-mobile-menu">
        <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
            <i class="pe-7s-close"></i>
        </a>

        <div class="offcanvas-wrapper">

            <div class="offcanvas-inner-content">
                <div class="offcanvas-mobile-search-area">
                    <form action="#">
                        <input type="search" placeholder="Search ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-naviagtion">
                    <ul>
                        <li class="menu-item-has-children"><a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                                <li><a href="index-3.html">Home 03</a></li>
                                <li><a href="index-4.html">Home 04</a></li>
                                <li><a href="index-5.html">Home 05</a></li>
                                <li><a href="index-6.html">Home 06</a></li>
                                <li><a href="index-7.html">Home 07</a></li>
                                <li><a href="index-8.html">Home 08</a></li>
                                <li><a href="index-9.html">Home 09</a></li>
                                <li><a href="instagram-shop.html">Instagram Shop</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Page</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="faq.html">F.A.Q</a></li>
                                <li><a href="service.html">Our Service</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Elements</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children"><a href="#">Shop/Products</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-product-category.html">Product Categories</a></li>
                                        <li><a href="element-product-carousel.html">Products Carousel</a></li>
                                        <li><a href="element-product-widget.html">Product Widget</a></li>
                                        <li><a href="element-recent-product.html">Recent Products</a></li>
                                        <li><a href="element-sale-product.html">Sale Products</a></li>
                                        <li><a href="element-featured-product.html">Featured Product</a></li>
                                        <li><a href="element-top-rated-product.html">Top Rated Products</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Theming</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-blog-post.html">Blog Posts</a></li>
                                        <li><a href="element-mailchimp-form.html">MailChimp Form</a></li>
                                        <li><a href="element-accordion-toggles.html">Accordion/Toggles</a></li>
                                        <li><a href="element-progress-bar.html">Progress Bars</a></li>
                                        <li><a href="element-countdown-timer.html">Countdown Timer</a></li>
                                        <li><a href="element-button.html">Buttons</a></li>
                                        <li><a href="element-testimonial.html">Testimonials</a></li>
                                        <li><a href="element-google-map.html">Google Maps</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children"><a href="#">Blog post list</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-one-column.html">Blog one column</a> </li>
                                        <li><a href="blog-two-column.html">Blog two column</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Blog post details</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-post-format-image.html">Blog post format image</a></li>
                                        <li><a href="blog-post-format-gallery.html">Blog post format gallery</a></li>
                                        <li><a href="blog-post-format-audio.html">Blog post format audio</a></li>
                                        <li><a href="blog-post-format-video.html">Blog post format video</a></li>
                                        <li><a href="blog-post-left-sidebar.html">Blog post left sidebar</a></li>
                                        <li><a href="blog-post-right-sidebar.html">Blog post right sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children"><a href="#">Shop Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                        <li><a href="shop-list.html">Shop List Layout</a></li>
                                        <li><a href="shop-no-sidebar.html">Shop No Sidebar</a></li>
                                        <li><a href="shop-left-sidebar.html">Shop With Left Sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop With Right Sidebar</a></li>
                                        <li><a href="shop-brand.html">Shop By Brand</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Shop Pages(Details)</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-details-basic.html">Basic</a></li>
                                        <li><a href="product-details-fullwidth.html">Fullwidth</a></li>
                                        <li><a href="product-details-sticky.html">Sticky Details</a></li>
                                        <li><a href="product-details-bottom-thumbnail.html">Bottom thumbnails</a></li>
                                        <li><a href="product-details-extra-content.html">Extra content</a></li>
                                        <li><a href="product-details-variation-image.html">Variations Images</a></li>
                                        <li><a href="product-details-affiliate.html">Product details affiliate</a></li>
                                        <li><a href="product-details-group.html">Product details group</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <div class="header-contact-info">
                            <ul class="header-contact-info__list">
                                <li><i class="pe-7s-phone"></i> <a href="tel://12452456012">(1245) 2456 012 </a></li>
                                <li><i class="pe-7s-mail-open"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Off Canvas Widget Social Start-->
                    <div class="off-canvas-widget-social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                    </div>
                    <!--Off Canvas Widget Social End-->
                </div>
            </div>
        </div>

    </div>

    <!--=======  End of offcanvas mobile menu  =======-->

    <!--====================  End of offcanvas items  ====================-->
    <!--=======  search overlay  =======-->

    <div class="search-overlay" id="search-overlay">

        <!--=======  close icon  =======-->

        <span class="close-icon search-close-icon">
        <a href="javascript:void(0)"  id="search-close-icon">
            <i class="pe-7s-close"></i>
        </a>
    </span>

        <!--=======  End of close icon  =======-->

        <!--=======  search overlay content  =======-->

        <div class="search-overlay-content">
            <div class="input-box">
                <form action="https://demo.hasthemes.com/robin-preview/robin/index.html">
                    <input type="search" placeholder="Search Products...">
                </form>
            </div>
            <div class="search-hint">
                <span># Hit enter to search or ESC to close</span>
            </div>
        </div>

        <!--=======  End of search overlay content  =======-->
    </div>

    <!--=======  End of search overlay  =======-->
    <!-- scroll to top  -->
    <button class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </button>
    <!-- end of scroll to top -->
    
    @include('layouts.client.script')

</body>

</html>