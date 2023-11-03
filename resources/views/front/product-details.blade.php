@extends('layouts.app')

@section('content')
    <!-- page-title -->
    @foreach ($product as $p)
        <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix"
            style="background-image:url('{{ asset('assets/product/' . $p->background) }}')">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="ttm-page-title-row-inner">
                            <div class="page-title-heading">
                                <h2 class="title">{{ $p->product_name }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title end -->
        <!--site-main start-->
        <div class="site-main">
            <div class="ttm-row sidebar ttm-sidebar-right clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-6 content-area">
                            <div class="post ttm-blog-single clearfix">
                                <div class="ttm-post-featured-wrapper ttm-featured-wrapper slick-arrows-style1 main-slider">

                                    @foreach ($p->images as $image)
                                        <div class="ttm-post-featured">
                                            <img class="img-fluid" src="{{ asset('assets/products/' . $image->image) }}"
                                                alt="servetech pro{{ $image->alt_image }}">
                                        </div>
                                    @endforeach

                                </div>
                                <div
                                    class="ttm-post-featured-wrapper ttm-featured-wrapper slick-arrows-style1 thumb-slider mt-4">

                                    @foreach ($p->images as $image)
                                        <div class="ttm-post-featured">
                                            <img class="img-fluid" src="{{ asset('assets/products/' . $image->image) }}"
                                                lt="servetech pro{{ $image->alt_image }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 widget-area sidebar-right">
                            <div class="content h24">
                                <h3 class="pt-3 pt-lg-0">{{ $p->title_details }}</h3>
                                <h4 class="pb-2 mt-4">{{ $p->subtitle_details }}</h4>
                                <p class="text-justify">{!! $p->desc1 !!}</p>
                            </div>
                            <div class="social-media-block">
                                <div class="d-sm-flex justify-content-between">
                                    <div>
                                        @if ($p->tag1)
                                            <div class="ttm_tag_lists margin_top15">
                                                <span class="ttm-tags-links-title"><i class="fa fa-cog"></i>
                                                    {{ $p->tag1 }}</span>
                                                <span class="ttm-tags-links"> {{ $p->tag_p1 }}</span>
                                            </div>
                                        @endif
                                        @if ($p->tag2)
                                            <div class="ttm_tag_lists margin_top15">
                                                <span class="ttm-tags-links-title"><i class="fa fa-cog"></i>
                                                    {{ $p->tag2 }}</span>
                                                <span class="ttm-tags-links">{{ $p->tag_p2 }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ttm-social-share-wrapper margin_top15">
                                        <h6 class="fs-16 m-0 padding_right10">Share : </h6>
                                        @php
                                            $postTitle = urlencode($p->product_name);
                                            $postUrl = urlencode(route('product_path', $p->id));
                                            $linkedShareUrl = "https://www.linkedin.com/shareArticle?mini=true&url=$postUrl&title=$postTitle";
                                            $fbUrl = "https://www.facebook.com/sharer/sharer.php?u=$postUrl&title=$postTitle";
                                            $twit = "https://twitter.com/intent/tweet?text=$postUrl&title=$postTitle";
                                        @endphp
                                        <ul class="social-icons">
                                            <li><a href="{{ $fbUrl }}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{ $twit }}"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="{{ $linkedShareUrl }}"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor mt-4"
                                data-toggle="modal" data-target="#inquiryModal"
                                data-product-name="{{ $p->product_name }}">For Inquiry!</button>
                        </div>
                        <div class="ttm-row pb-0">
                            <div class="col-lg-12 ">
                                <h4 class="text-uppercase">{{ $p->title_desc2 }}</h4>
                                <div class="tab-content">
                                    <div id="description" class="tab-pane fade show active" role="tabpanel">
                                        <p class="pb-4 text-justify text-black fw-bold">{!! $p->desc2 !!}
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
    @endforeach
    <div class="ttm-bgcolor-grey ttm-row">
        @include('front.products')
    </div>
    </div><!--site-main end-->
@endsection
