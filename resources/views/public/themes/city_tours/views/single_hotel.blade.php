@extends("public.themes.city_tours.layout.public")

@section("vendor-css")


@endsection

@section("header")


@endsection

@section("main")

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset("front-end-assets/img/single_hotel_bg_1.jpg")}}" data-natural-width="1400"
             data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                            class=" icon-star-empty"></i></span>
                        <h1>Mariott Hotel</h1>
                        <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>
                    </div>
                    <div class="col-md-4">
                        <div id="price_single_main" class="hotel">
                            from/per night <span><sup>$</sup>95</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section -->

    <main>
    @include("public.themes.city_tours.widgets.breadcrumbs")
    <!-- End Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-8" id="single_tour_desc">
                    <div id="single_tour_feat">
                        <ul>
                            <li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
                            <li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
                            <li><i class="icon_set_2_icon-110"></i>Poll</li>
                            <li><i class="icon_set_1_icon-59"></i>Breakfast</li>
                            <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                            <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                            <li><i class="icon_set_1_icon-27"></i>Parking</li>
                        </ul>
                    </div>
                    <p class="d-none d-md-block d-block d-lg-none"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false"
                                                                      aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                    </p>
                    <!-- Map button for tablets/mobiles -->
                    <div id="Img_carousel" class="slider-pro">
                        <div class="sp-slides">

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="{{asset("front-end-assets/css/images/blank.gif")}}"
                                     data-src="{{asset("front-end-assets/img/slider_single_tour/1_medium.jpg")}}"
                                     data-small="{{asset("front-end-assets/img/slider_single_tour/1_small.jpg")}}"
                                     data-medium="{{asset("front-end-assets/img/slider_single_tour/1_medium.jpg")}}"
                                     data-large="{{asset("front-end-assets/img/slider_single_tour/1_large.jpg")}}"
                                     data-retina="{{asset("front-end-assets/img/slider_single_tour/1_large.jpg")}}">
                            </div>
                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="{{asset("front-end-assets/css/images/blank.gif")}}"
                                     data-src="{{asset("front-end-assets/img/slider_single_tour/2_medium.jpg")}}"
                                     data-small="{{asset("front-end-assets/img/slider_single_tour/2_small.jpg")}}"
                                     data-medium="{{asset("front-end-assets/img/slider_single_tour/2_medium.jpg")}}"
                                     data-large="{{asset("front-end-assets/img/slider_single_tour/2_large.jpg")}}"
                                     data-retina="{{asset("front-end-assets/img/slider_single_tour/2_large.jpg")}}">
                                <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">
                                    Lorem ipsum dolor sit amet </h3>
                                <p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">
                                    consectetur adipisicing elit
                                </p>
                                <p class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat.
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="{{asset("front-end-assets/css/images/blank.gif")}}"
                                     data-src="{{asset("front-end-assets/img/slider_single_tour/3_medium.jpg")}}"
                                     data-small="{{asset("front-end-assets/img/slider_single_tour/3_small.jpg")}}"
                                     data-medium="{{asset("front-end-assets/img/slider_single_tour/3_medium.jpg")}}"
                                     data-large="{{asset("front-end-assets/img/slider_single_tour/3_large.jpg")}}"
                                     data-retina="{{asset("front-end-assets/img/slider_single_tour/3_large.jpg")}}">
                                <p class="sp-layer sp-white sp-padding" data-position="centerCenter" data-vertical="-50" data-show-transition="right" data-show-delay="500">
                                    Lorem ipsum dolor sit amet
                                </p>
                                <p class="sp-layer sp-black sp-padding" data-position="centerCenter" data-vertical="50" data-show-transition="left" data-show-delay="700">
                                    consectetur adipisicing elit
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="{{asset("front-end-assets/css/images/blank.gif")}}"
                                     data-src="{{asset("front-end-assets/img/slider_single_tour/4_medium.jpg")}}"
                                     data-small="{{asset("front-end-assets/img/slider_single_tour/4_small.jpg")}}"
                                     data-medium="{{asset("front-end-assets/img/slider_single_tour/4_medium.jpg")}}"
                                     data-large="{{asset("front-end-assets/img/slider_single_tour/4_large.jpg")}}"
                                     data-retina="{{asset("front-end-assets/img/slider_single_tour/4_large.jpg")}}">
                                <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="{{asset("front-end-assets/css/images/blank.gif")}}"
                                     data-src="{{asset("front-end-assets/img/slider_single_tour/5_medium.jpg")}}"
                                     data-small="{{asset("front-end-assets/img/slider_single_tour/5_small.jpg")}}"
                                     data-medium="{{asset("front-end-assets/img/slider_single_tour/5_medium.jpg")}}"
                                     data-large="{{asset("front-end-assets/img/slider_single_tour/5_large.jpg")}}"
                                     data-retina="{{asset("front-end-assets/img/slider_single_tour/5_large.jpg")}}">
                                <p class="sp-layer sp-white sp-padding" data-vertical="5%" data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="{{asset("front-end-assets/css/images/blank.gif")}}"
                                     data-src="{{asset("front-end-assets/img/slider_single_tour/6_medium.jpg")}}"
                                     data-small="{{asset("front-end-assets/img/slider_single_tour/6_small.jpg")}}"
                                     data-medium="{{asset("front-end-assets/img/slider_single_tour/6_medium.jpg")}}"
                                     data-large="{{asset("front-end-assets/img/slider_single_tour/6_large.jpg")}}"
                                     data-retina="{{asset("front-end-assets/img/slider_single_tour/6_large.jpg")}}">
                                <p class="sp-layer sp-white sp-padding" data-horizontal="10" data-vertical="10" data-width="300">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="{{asset("front-end-assets/css/images/blank.gif")}}"
                                     data-src="{{asset("front-end-assets/img/slider_single_tour/7_medium.jpg")}}"
                                     data-small="{{asset("front-end-assets/img/slider_single_tour/7_small.jpg")}}"
                                     data-medium="{{asset("front-end-assets/img/slider_single_tour/7_medium.jpg")}}"
                                     data-large="{{asset("front-end-assets/img/slider_single_tour/7_large.jpg")}}"
                                     data-retina="{{asset("front-end-assets/img/slider_single_tour/7_large.jpg")}}">
                                <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%"
                                   data-show-transition="up"
                                   data-show-delay="400">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="{{asset("front-end-assets/css/images/blank.gif")}}"
                                     data-src="{{asset("front-end-assets/img/slider_single_tour/8_medium.jpg")}}"
                                     data-small="{{asset("front-end-assets/img/slider_single_tour/8_small.jpg")}}"
                                     data-medium="{{asset("front-end-assets/img/slider_single_tour/8_medium.jpg")}}"
                                     data-large="{{asset("front-end-assets/img/slider_single_tour/8_large.jpg")}}"
                                     data-retina="{{asset("front-end-assets/img/slider_single_tour/8_large.jpg")}}">
                                <p class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="down" data-show-delay="500">
                                    Lorem ipsum dolor sit amet
                                </p>
                                <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="100" data-show-transition="up" data-show-delay="500">
                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="{{asset("front-end-assets/css/images/blank.gif")}}"
                                     data-src="{{asset("front-end-assets/img/slider_single_tour/9_medium.jpg")}}"
                                     data-small="{{asset("front-end-assets/img/slider_single_tour/9_small.jpg")}}"
                                     data-medium="{{asset("front-end-assets/img/slider_single_tour/9_medium.jpg")}}"
                                     data-large="{{asset("front-end-assets/img/slider_single_tour/9_large.jpg")}}"
                                     data-retina="{{asset("front-end-assets/img/slider_single_tour/9_large.jpg")}}">
                            </div>
                        </div>
                        <div class="sp-thumbnails">
                            <img alt="Image" class="sp-thumbnail" src="{{asset("front-end-assets/img/slider_single_tour/1_medium.jpg")}}">
                            <img alt="Image" class="sp-thumbnail" src="{{asset("front-end-assets/img/slider_single_tour/2_medium.jpg")}}">
                            <img alt="Image" class="sp-thumbnail" src="{{asset("front-end-assets/img/slider_single_tour/3_medium.jpg")}}">
                            <img alt="Image" class="sp-thumbnail" src="{{asset("front-end-assets/img/slider_single_tour/4_medium.jpg")}}">
                            <img alt="Image" class="sp-thumbnail" src="{{asset("front-end-assets/img/slider_single_tour/5_medium.jpg")}}">
                            <img alt="Image" class="sp-thumbnail" src="{{asset("front-end-assets/img/slider_single_tour/6_medium.jpg")}}">
                            <img alt="Image" class="sp-thumbnail" src="{{asset("front-end-assets/img/slider_single_tour/7_medium.jpg")}}">
                            <img alt="Image" class="sp-thumbnail" src="{{asset("front-end-assets/img/slider_single_tour/8_medium.jpg")}}">
                            <img alt="Image" class="sp-thumbnail" src="{{asset("front-end-assets/img/slider_single_tour/9_medium.jpg")}}">
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-3">
                            <h3>Description</h3>
                        </div>
                        <div class="col-lg-9">
                            <p>
                                Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto
                                efficiendi.
                                Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
                            </p>
                            <h4>Hotel facilities</h4>
                            <p>
                                Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto
                                efficiendi.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list_ok">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>No scripta electram necessitatibus sit</li>
                                        <li>Quidam percipitur instructior an eum</li>
                                        <li>Ut est saepe munere ceteros</li>
                                        <li>No scripta electram necessitatibus sit</li>
                                        <li>Quidam percipitur instructior an eum</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list_ok">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>No scripta electram necessitatibus sit</li>
                                        <li>Quidam percipitur instructior an eum</li>
                                        <li>No scripta electram necessitatibus sit</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End row  -->
                        </div>
                        <!-- End col-md-9  -->
                    </div>
                    <!-- End row  -->

                    <hr>

                    <div class="row">
                        <div class="col-lg-3">
                            <h3>Rooms Types</h3>
                        </div>
                        <div class="col-lg-9">
                            <h4>Single Room</h4>
                            <p>
                                Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto
                                efficiendi.
                            </p>

                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list_icons">
                                        <li><i class="icon_set_1_icon-86"></i> Free wifi</li>
                                        <li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
                                        <li><i class="icon_set_2_icon-106"></i> Safety box</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list_ok">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>No scripta electram necessitatibus sit</li>
                                        <li>Quidam percipitur instructior an eum</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End row  -->
                            <div class="owl-carousel owl-theme carousel-thumbs-2 magnific-gallery">
                                <div class="item">
                                    <a href="{{asset("front-end-assets/img/carousel/1.jpg")}}" data-effect="mfp-zoom-in">
                                        <img src="{{asset("front-end-assets/img/carousel/1.jpg")}}" alt="Image">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="{{asset("front-end-assets/img/carousel/2.jpg")}}" data-effect="mfp-zoom-in">
                                        <img src="{{asset("front-end-assets/img/carousel/2.jpg")}}" alt="Image">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="{{asset("front-end-assets/img/carousel/3.jpg")}}" data-effect="mfp-zoom-in">
                                        <img src="{{asset("front-end-assets/img/carousel/3.jpg")}}" alt="Image">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="{{asset("front-end-assets/img/carousel/4.jpg")}}" data-effect="mfp-zoom-in">
                                        <img src="{{asset("front-end-assets/img/carousel/4.jpg")}}" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <!-- End photo carousel  -->

                            <hr>

                            <h4>Double Room</h4>
                            <p>
                                Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto
                                efficiendi.
                            </p>

                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list_icons">
                                        <li><i class="icon_set_1_icon-86"></i> Free wifi</li>
                                        <li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
                                        <li><i class="icon_set_2_icon-106"></i> Safety box</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list_ok">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>No scripta electram necessitatibus sit</li>
                                        <li>Quidam percipitur instructior an eum</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End row  -->
                            <div class="owl-carousel owl-theme carousel-thumbs-2 magnific-gallery">
                                <div class="item">
                                    <a href="{{asset("front-end-assets/img/carousel/1.jpg")}}" data-effect="mfp-zoom-in">
                                        <img src="{{asset("front-end-assets/img/carousel/1.jpg")}}" alt="Image">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="{{asset("front-end-assets/img/carousel/2.jpg")}}" data-effect="mfp-zoom-in">
                                        <img src="{{asset("front-end-assets/img/carousel/2.jpg")}}" alt="Image">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="{{asset("front-end-assets/img/carousel/3.jpg")}}" data-effect="mfp-zoom-in">
                                        <img src="{{asset("front-end-assets/img/carousel/3.jpg")}}" alt="Image">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="{{asset("front-end-assets/img/carousel/4.jpg")}}" data-effect="mfp-zoom-in">
                                        <img src="{{asset("front-end-assets/img/carousel/4.jpg")}}" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <!-- End photo carousel  -->
                        </div>
                        <!-- End col-md-9  -->
                    </div>
                    <!-- End row  -->

                    <hr>

                    <div class="row">
                        <div class="col-lg-3">
                            <h3>Reviews</h3>
                            <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a review</a>
                        </div>
                        <div class="col-lg-9">
                            <div id="score_detail"><span>7.5</span>Good <small>(Based on 34 reviews)</small>
                            </div>
                            <!-- End general_rating -->
                            <div class="row" id="rating_summary">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Position
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                            </div>
                                        </li>
                                        <li>Comfort
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Price
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                            </div>
                                        </li>
                                        <li>Quality
                                            <div class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End row -->
                            <hr>
                            <div class="review_strip_single">
                                <img src="{{asset("front-end-assets/img/avatar1.jpg")}}" alt="Image" class="rounded-circle">
                                <small> - 10 March 2015 -</small>
                                <h4>Jhon Doe</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum
                                    et
                                    malesuada fames ac ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                                </div>
                            </div>
                            <!-- End review strip -->

                            <div class="review_strip_single">
                                <img src="{{asset("front-end-assets/img/avatar2.jpg")}}" alt="Image" class="rounded-circle">
                                <small> - 10 March 2015 -</small>
                                <h4>Jhon Doe</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum
                                    et
                                    malesuada fames ac ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                                </div>
                            </div>
                            <!-- End review strip -->

                            <div class="review_strip_single last">
                                <img src="{{asset("front-end-assets/img/avatar3.jpg")}}" alt="Image" class="rounded-circle">
                                <small> - 10 March 2015 -</small>
                                <h4>Jhon Doe</h4>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum
                                    et
                                    malesuada fames ac ante ipsum primis in faucibus."
                                </p>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                                </div>
                            </div>
                            <!-- End review strip -->
                        </div>
                    </div>
                </div>
                <!--End  single_tour_desc-->

                <aside class="col-lg-4">
                    <p class="d-none d-xl-block d-lg-block d-xl-none">
                        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map"
                           data-text-original="View on map">View on map</a>
                    </p>
                    <div class="box_style_1 expose">
                        <h3 class="inner">Check Availability</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="icon-calendar-7"></i> Check in</label>
                                    <input class="date-pick form-control" data-date-format="M d, D" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="icon-calendar-7"></i> Check out</label>
                                    <input class="date-pick form-control" data-date-format="M d, D" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Adults</label>
                                    <div class="numbers-row">
                                        <input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Children</label>
                                    <div class="numbers-row">
                                        <input type="text" value="0" id="children" class="qty2 form-control" name="quantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <a class="btn_full" href="#">Check now</a>
                        <a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
                    </div>
                    <!--/box_style_1 -->

                    <div class="box_style_4">
                        <i class="icon_set_1_icon-90"></i>
                        <h4><span>Book</span> by phone</h4>
                        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>

                </aside>
            </div>
            <!--End row -->
        </div>
        <!--End container -->

        <div id="overlay"></div>
        <!-- Mask on input focus -->

    </main>
    <!-- End main -->




@endsection


@section("vendor-js")


    @if(in_array(App::getLocale(),config('base.rtl_locales')))

        <!-- Date and time pickers -->
        <script src="{{asset("front-end-assets/rtl/js/jquery.sliderPro.min.js")}}"></script>
        <script type="text/javascript">
            $(document).ready(function ($) {
                $('#Img_carousel').sliderPro({
                    width: 960,
                    height: 500,
                    fade: true,
                    arrows: true,
                    buttons: false,
                    fullScreen: false,
                    smallSize: 500,
                    startSlide: 0,
                    mediumSize: 1000,
                    largeSize: 3000,
                    thumbnailArrows: true,
                    rightToLeft: true,
                    autoplay: false
                });
            });
        </script>

        <!-- Date and time pickers -->
        <script>
            $('input.date-pick').datepicker({
                rtl: true
            });
            $('input.date-pick').datepicker('setDate', 'today');
        </script>

        <!-- Map -->
        <script src="../../maps.googleapis.com/maps/api/js_3.JS"></script>
        <script src="{{asset("front-end-assets/rtl/js/map.js")}}"></script>
        <script src="{{asset("front-end-assets/rtl/js/infobox.js")}}"></script>

        <!-- Carousel -->
        <script>
            $('.carousel-thumbs-2').owlCarousel({
                loop: false,
                margin: 5,
                responsiveClass: true,
                nav: false,
                rtl: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4,
                        nav: false
                    }
                }
            });
        </script>

        <!--Review modal validation -->
        <script src="{{asset("front-end-assets/assets/validate.js")}}"></script>


    @else














        <script src="{{asset("front-end-assets/ltr/js/jquery.sliderPro.min.js")}}"></script>
        <script type="text/javascript">
            $(document).ready(function ($) {
                $('#Img_carousel').sliderPro({
                    width: 960,
                    height: 500,
                    fade: true,
                    arrows: true,
                    buttons: false,
                    fullScreen: false,
                    smallSize: 500,
                    startSlide: 0,
                    mediumSize: 1000,
                    largeSize: 3000,
                    thumbnailArrows: true,
                    autoplay: false
                });
            });
        </script>

        <!-- Date and time pickers -->
        <script>
            $('input.date-pick').datepicker('setDate', 'today');
        </script>

        <!-- Map -->
        <script src="../maps.googleapis.com/maps/api/js_2.JS"></script>
        <script src="{{asset("front-end-assets/ltr/js/map.js")}}"></script>
        <script src="{{asset("front-end-assets/ltr/js/infobox.js")}}"></script>

        <!-- Carousel -->
        <script>
            $('.carousel-thumbs-2').owlCarousel({
                loop: false,
                margin: 5,
                responsiveClass: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4,
                        nav: false
                    }
                }
            });
        </script>

        <!--Review modal validation -->
        <script src="{{asset("front-end-assets/assets/validate.js")}}"></script>


    @endif
















@endsection

@section("footer")


@endsection
