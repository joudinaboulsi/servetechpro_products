<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!-- section-title -->
            <div class="section-title title-style-center_text">
                <div class="title-header">
                    <h5>{{$portfolio[0]->title}}</h5>
                    <h2 class="title">{{$portfolio[0]->subtitle}} </h2>
                </div>
            </div>
            <!-- section-title end -->
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white ttm-bg padding_left10 padding_right10">
                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                    <div class="ttm-col-wrapper-bg-layer-inner"></div>
                </div>
                <div class="layer-content">
                    <div class="row ttm-boxes-spacing-10px">
                        @foreach($portfolio_image as $img)
                        <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                            <div class="featured-imagebox featured-imagebox-portfolio style3">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="../assets/img/portfolio/{{$img->image}}" alt="{{$img->title}}">
                                </div>
                                <!-- featured-thumbnail end-->
                            </div>
                            <!-- featured-icon-box end-->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
</div>