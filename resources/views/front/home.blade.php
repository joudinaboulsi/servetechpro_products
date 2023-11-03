@extends('layouts.app')
@section('content')
 <!-- Banner -->
 <div class="banner_slider_wrapper" id="home">
                <div class="banner_slider banner_slider_1">
                    @foreach($home_slides as $slide)
                    <div class="slide">
                        <div class="slide_img" style="background-image: url(../assets/img/homeSlider/{{$slide->image}});"></div>
                        <div class="slide__content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="slide__content--headings">
                                            <h3 data-animation="fadeInUp" data-delay="0.2s">
                                                {{$slide->title}}
                                            </h3>
                                            <h2 data-animation="fadeInUp" data-delay="0.5s">
                                                {{$slide->content}}
                                            </h2>
                                            <p data-animation="fadeInUp" data-delay="0.7s" class="">
                                                {{$slide->subtitle}}
                                            </p>
                                            <div class=" slide-btn1 margin_top30 res-575-margin_top10 " data-animation="fadeInUp" data-delay="0.9s">
                                                <a class="ttm-btn ttm-btn-size-xl ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="#about">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Banner end-->
            <!--site-main start-->
            <div class="site-main">
                <!--about-section-->
                <section id="about" class="ttm-row about-section clearfix z-index-1">
                    @include('front.about')
                </section>
                <!--about-section-End-->

                <!--services-section-->
                <section id="services" class="ttm-row services-section ttm-bgcolor-grey clearfix">
                    @include('front.service')
                </section>
                <!--services-section end -->

                <!--cta-section-->
                <section id="cta" class="ttm-row cta-section ttm-bgimage-yes bg-img2 ttm-bg ttm-bgcolor-darkgrey clearfix" style="background-image: url(../assets/img/section1/{{$section_one[0]->image_one}})">
                    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="container">
                        <!-- row -->
                        @include('front.sectionOne')
                        <!-- row end -->
                    </div>
                </section>
                <!--cta-section end-->

                <!--image section -->
                <section id="products" class="ttm-row bg-layer-equal-height ttm-bgcolor-grey clearfix">
                    @include('front.products')
                </section>
                <!--image section end -->

                <!--image section -->
                <section id="Measurement" class="ttm-row image-section bg-layer-equal-height ttm-bgcolor-grey clearfix">
                    @include('front.sectionTwo')
                </section>
                <!--image section end -->

                <!--Project section -->
                <section id="portfolio" class="ttm-row project-section">
                    @include('front.portfolio')
                </section>
                <!--Project section End -->

                <!--client-section-->
                <div id="client" class="ttm-row client-section mt_200 ttm-bgcolor-darkgrey clearfix">
                    @include('front.client')
                </div>
                <!--client-section end-->

                <!--contact section  -->
                <section id="contact" class="ttm-row contact-section ttm-bgimage-yes bg-img4 z-index-1 ttm-bg ttm-bgcolor-grey clearfix">
                    @include('front.contact')
                </section>
                <!--contact section End -->

                <!--Map  -->
                <div class="row">
                    <div class="col-lg-12">
                        {!! app('contact')->map !!}
                    </div>
                    <!--Map Section  -->
                </div>
                <!--Map end -->

            </div>
            <!--site-main end-->

            @endsection