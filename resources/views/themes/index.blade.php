
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Landing Page</title>
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg"> --}}
    <link rel="shortcut icon" href="{{ asset('files/config/' . $config?->fav) }}" type="image/x-icon">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/maind134.css') }}">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

    <style>
        .slider-container {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            width: 100%;
            margin: auto;
            overflow: hidden;
        }

        .slider-wrapper {
        overflow: hidden;
        width: 100%;
        }

        .slider {
        display: flex;
        transition: transform 0.3s ease-in-out;
        }

        .slide {
        flex: 0 0 33.33%; /* Show 3 images at a time */
        box-sizing: border-box;
        margin-left: 3px;
        margin-right: 3px;
        }

        .slide img {
        width: 100%;
        display: block;
        }

        button {
        background-color: rgba(0, 0, 0, 0.5);
        border: none;
        color: white;
        font-size: 18px;
        padding: 10px;
        cursor: pointer;
        z-index: 10;
        }

        button:focus {
        outline: none;
        }

        .prev-button {
        position: absolute;
        left: 0;
        }

        .next-button {
        position: absolute;
        right: 0;
        }
        .detail-qty {
        max-width: 124px;
        padding: 9px 50px;
        }
    </style>


</head>
<body>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container text-center">
                <div class="breadcrumb">
                    {{-- <a  rel="nofollow" class="text-center">Home</a> --}}
                    <img width="100px" height="100px" src="{{ asset('files/config/' . $config?->logo) }}" class="logo text-center" alt="Evara Dashboard">
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            @foreach($product_images as $image)
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('files/product/' . $image->image) }}" alt="product image">
                                            </figure>
                                            @endforeach

                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15">
                                            @foreach($product_images as $image)
                                            <div><img src="{{ asset('files/product/' . $image->image) }} " alt="product image"></div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a></li>
                                            <li class="social-linkedin"><a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-pinterest.svg') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ $product?->name }}</h2>
                                        <div class="product-detail-rating">
                                            {{-- <div class="pro-details-brand">
                                                <span> Brands: <a href="shop-grid-right.html">Bootstrap</a></span>
                                            </div> --}}
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:{{ $product?->star_rating }}%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> ({{ $product?->review_count }} reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">৳{{ $product?->after_price }}</span></ins>
                                                <ins><span class="old-price font-md ml-15">৳{{ $product?->before_price }}</span></ins>
                                                {{-- <span class="save-price  font-md color3 ml-15">25% Off</span> --}}
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{ $product?->short_description }}</p>
                                        </div>
                                        {{-- <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i class="fi-rs-crown mr-5"></i> 1 Year AL Jazeera Brand Warranty</li>
                                                <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy</li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                            </ul>
                                        </div> --}}

                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">

                                            <a href="#billing">
                                            <div class="product-extra-link2">
                                                <button class="button button-add-to-cart">Order Now</button>
                                                {{-- <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> --}}
                                            </div>
                                        </a>
                                        </div>
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            {{-- <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li> --}}
                                            <li class="mb-5">Tags: <a href="#" rel="tag">{{ $product?->tags }}</a> </li>
                                            <li>Availability:<span class="in-stock text-success ml-5">{{ $product?->in_stock }} Items In Stock</span></li>
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Additional info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews ({{ $review_images?->count() }})</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                           {!! $product?->description !!}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Additional-info">
                                      {!! $product?->additional_info !!}
                                    </div>
                                    <div class="tab-pane fade" id="Reviews">
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="slider-container">
                                                        <button class="prev-button" onclick="prevSlide()">&#10094;</button>
                                                        <div class="slider-wrapper">
                                                          <div class="slider">
                                                            @foreach ($review_images as $image )
                                                            <div class="slide">
                                                                <img src="{{ asset('files/product/'.$image->image) }} " alt="Image 1">
                                                            </div>
                                                            @endforeach
                                                          </div>
                                                        </div>
                                                        <button class="next-button" onclick="nextSlide()">&#10095;</button>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--comment form-->
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 id="billing" class="section-title style-1 mb-30"> Billing Details</h3>
                                </div>
                                <div class="col-lg-8">
                                    <div class="attr-detail attr-color mb-15">
                                        <strong class="mr-10">Color</strong>
                                        <ul class="list-filter color-filter">
                                            @foreach ($colors as $color)
                                                <li class="color" data-color_id ="{{ $color->id }}"><a href="#" data-color="{{ $color->name }}"><span style="background: {{ $color->code }}"></span></a></li>
                                            @endforeach
                                        </ul>

                                        <strong class="text-danger ml-10 color-error d-none">Please Select a Color!</strong>
                                    </div>
                                    <div class="attr-detail attr-size">
                                        <strong class="mr-10">Size</strong>
                                        <ul class="list-filter size-filter font-small">
                                            @foreach ($sizes as $size)
                                                <li class="size" data-size_id ="{{ $size->id }}"><a href="#">{{ $size->name  }}</a></li>
                                            @endforeach
                                        </ul>
                                        <strong class="text-danger ml-10 size-error d-none">Please Select a Size!</strong>
                                    </div>
                                    <div class="detail-extralink">
                                        <div class="detail-qty border radius mt-3">
                                            <a href="#" class="qty-down down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">1</span>
                                            <a href="#" class="qty-up up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                    </div>
                                    <div class="comment-form" style="padding-top: 13px;">
                                        <h4 class="mb-15">Billing Info</h4>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <form class="form-contact comment_form" action="{{ route('order.store') }}" id="order_form" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                                                <strong class="text-danger name-error d-none">Please Enter Your Name!</strong>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input class="form-control" name="phone" id="phone" type="number" placeholder="Phone Number">
                                                                <strong class="text-danger phone-error d-none">Please Enter Your Phone Number!</strong>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input class="form-control" name="address" id="address" type="text" placeholder="Home Address">
                                                                <strong class="text-danger address-error d-none">Please Enter Your Address!</strong>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control w-100" name="note" id="note" cols="30" rows="9" placeholder="Oder Notes (optional)"></textarea>
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <input type="hidden" name='color' id='color_value' >
                                                    <input type="hidden" name='size' id='size_value' >
                                                    <input type="hidden" name='quantity' id='quantity_value' >
                                                    <input type="hidden" name='price' id='' value="{{ $product?->after_price }}" >
                                                    <input type="hidden" name='shipping_charge' id='' value="{{ $product?->shipping_charge }}" >
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="border p-md-4 p-30 border-radius cart-totals">
                                        <div class="heading_s1 mb-3">
                                            <h4>Your Order</h4>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="cart_total_label">Product</td>
                                                        <td class="cart_total_amount"><span class="font-lg fw-900 text-brand"> {{ $product?->name }} </span>
                                                           <span class="font-lg fw-900"> x <span id="quantity">1</span> </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Subtotal</td>
                                                        <td class="cart_total_amount"> <i class="ti-gift mr-5"></i>৳ <span id="subtotal" data-subtotal="{{ $product?->after_price }}">
                                                            {{ $product?->after_price }}
                                                        </span> </td>
                                                        <span id="price" data-price="{{ $product?->after_price }}" class="d-none"></span>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Shipping</td>
                                                        <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> {{ $product?->shipping_charge }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Total</td>
                                                        <td class="cart_total_amount">
                                                            <strong>
                                                                <span class="font-xl fw-900 text-brand">৳
                                                                   <span id="total" data-total="{{ $product?->after_price + $product?->shipping_charge }}"> {{ $product?->after_price + $product?->shipping_charge }} </span>
                                                                   <span id="total_price" data-total_price="{{ $product?->after_price + $product?->shipping_charge }}" class="d-none"></span>
                                                                </span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center">
                                            <a id="order" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Place Order</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <footer class="main">

        <div class="container pb-20 wow fadeIn animated">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-lg-6">
                    <p class="float-md-left font-sm text-muted mb-0">&copy; 2024, <strong class="text-brand">Hoodie</strong> - Landing Page Template </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-lg-end text-start font-sm text-muted mb-0">
                        Designed by <a href="http://synexdigital.com/" target="_blank">Synex Digital</a>. All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-5"> Loading</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Vendor JS-->

    {{-- <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script> --}}
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    {{-- <script src="{{ asset('frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script> --}}
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/slick.js') }}"></script>
    {{-- <script src="{{ asset('frontend/assets/js/plugins/jquery.syotimer.min.js') }}"></script> --}}
    <script src="{{ asset('frontend/assets/js/plugins/wow.js') }}"></script>
    {{-- <script src="{{ asset('frontend/assets/js/plugins/jquery-ui.js') }}"></script> --}}
    {{-- <script src="{{ asset('frontend/assets/js/plugins/perfect-scrollbar.js') }}"></script> --}}
    {{-- <script src="{{ asset('frontend/assets/js/plugins/magnific-popup.js') }}"></script> --}}
    {{-- <script src="{{ asset('frontend/assets/js/plugins/select2.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('frontend/assets/js/plugins/waypoints.js') }}"></script> --}}
    {{-- <script src="{{ asset('frontend/assets/js/plugins/counterup.js') }}"></script> --}}
    {{-- <script src="{{ asset('frontend/assets/js/plugins/jquery.countdown.min.js') }}"></script> --}}
    <script src="{{ asset('frontend/assets/js/plugins/images-loaded.js') }}"></script>
    {{-- <script src="{{ asset('frontend/assets/js/plugins/isotope.js') }}"></script> --}}
    {{-- <script src="{{ asset('frontend/assets/js/plugins/scrollup.js') }}"></script> --}}
    {{-- <script src="{{ asset('frontend/assets/js/plugins/jquery.vticker-min.js') }}"></script> --}}
    {{-- <script src="{{ asset('frontend/assets/js/plugins/jquery.theia.sticky.js') }}"></script> --}}
    <script src="{{ asset('frontend/assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('frontend/assets/js/maind134.js?v=3.4') }}"></script>
    <script src="{{ asset('frontend/assets/js/shopd134.js?v=3.4') }}"></script>
    <script>

let currentIndex = 0;
const slidesToShow = 3;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;
const slider = document.querySelector('.slider');

function updateSliderPosition() {
  const offset = -(currentIndex * (100 / slidesToShow));
  slider.style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
  if (currentIndex < totalSlides - slidesToShow) {
    currentIndex++;
    updateSliderPosition();
  }
}

function prevSlide() {
  if (currentIndex > 0) {
    currentIndex--;
    updateSliderPosition();
  }
}

    </script>
<script>
    $('#quantity_value').val(1);
    function updateValues(action) {
        let quantity = parseInt($('#quantity').html());
        let price = parseFloat($('#price').data('price'));
        let subtotal = parseFloat($('#subtotal').data('subtotal'));
        let total = parseFloat($('#total').data('total'));
        let total_price = parseFloat($('#total_price').data('total_price'));

        if (action === 'up') {
            quantity++;
            $('#quantity_value').val(quantity);
            subtotal += price;
            total += price;
        } else if (action === 'down' && quantity > 1) {
            quantity--;
            $('#quantity_value').val(quantity);
            subtotal = Math.max(price, subtotal - price);
            total = (total_price === total) ? total : total - price;
        }
        $('#quantity').html(quantity);
        $('#subtotal').html(subtotal).data('subtotal', subtotal);
        $('#total').html(total).data('total', total);
    }

    $('.up').on('click', function () {
        updateValues('up');
    });
    $('.down').on('click', function () {
        updateValues('down');
    });
    //order
    $('#order').on('click', function (e) {
        let hasError = false; // Track if any error exists

        // Helper function to toggle error messages
        function toggleError(condition, errorSelector) {
            if (condition) {
                $(errorSelector).removeClass('d-none');
                hasError = true;
            } else {
                $(errorSelector).addClass('d-none');
            }
        }

        // Validate each field
        toggleError(!$('.color').hasClass('active'), '.color-error');
        toggleError(!$('.size').hasClass('active'), '.size-error');
        toggleError(!$('#name').val(), '.name-error');
        toggleError(!$('#phone').val(), '.phone-error');
        toggleError(!$('#address').val(), '.address-error');

        // Prevent form submission if there are any errors
        if (hasError) {
            e.preventDefault();
        } else {
            let color_text = $('.color.active').data('color_id');
            $('#color_value').val(color_text);
            let size_text = $('.size.active').data('size_id');
            $('#size_value').val(size_text);
            $('#order_form').submit();
        }
    });

</script>

</body>



</html>
