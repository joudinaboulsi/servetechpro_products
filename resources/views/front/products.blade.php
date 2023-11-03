<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!-- section-title -->
            <div class="section-title title-style-center_text">
                @foreach($section as $s)
                <div class="title-header">
                    <h5>{{$s->title}}</h5>
                    <h2 class="title">{{$s->subtitle}}</h2>
                </div>
                @endforeach
            </div>
            <!-- section-title end -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row slick_slider slick-arrows-style1" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":true, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":840,"settings":{"slidesToShow": 2}},{"breakpoint":650,"settings":{"slidesToShow": 1}}]}'>
                @foreach ($products as $product)

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--featured-icon-box-->
                        <a href="{{ route('product_path',$product->id) }}">
                            <div class="featured-icon-box icon-align-top-content style8">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-lg ttm-icon_element-color-skincolor ttm-icon_element-style-square">
                                        <div class="product-image" style="background-image:url('{{asset('assets/product/'.$product->image)}}')"></div>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>{{$product->product_name}}</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>{!! strip_tags($product->desc) !!}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- featured-icon-box end-->
                    </div>
                @endforeach
            
             
              
            </div>
        </div>
    </div>
</div>