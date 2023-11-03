 <div class="container p-0">
    <div class="row">
        <div class="col-lg-12">
            <!-- col-img-img-two -->
            <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-one ttm-right-span spacing-1 ">
                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer" style="background-image: url('../assets/img/section2/{{$section_two[0]->image_one}}')"></div>
                <div class="layer-content"></div>
            </div>
            <!-- col-img-bg-img-two end-->
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-lg-6 padding_top70 padding_bottom70 res-575-padding_bottom0">
            <div class="row no-gutters ttm-border-bottom">
                <div class="col-sm-6">
                    <div class="ttm-bgcolor-darkgrey spacing-3 ">
                        <h3 class="col-title ">
                            {{$section_two[0]->title}}
                        </h3>
                        <a class="ttm-btn btn-inline ttm-btn-size-md ttm-btn-color-skincolor " href="#contact" tabindex="0">{{$section_two[0]->link}}</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- col-img-img-two -->
                    <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-two">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content"></div>
                    </div>
                    <!-- col-img-bg-img-two end-->
                    <img class="img-fluid ttm-equal-height-image w-100" src="../assets/img/section2/{{$section_two[0]->image_two}}" alt="bg-image" height="100" width="100">
                </div>
            </div>
        </div>
        <div class="col-lg-6 ">
            <div class="ttm-bgcolor-yes ttm-bgcolor-white ttm-bg ttm-right-span spacing-2">
                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="layer-content">
                    <!-- section-title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h5> {{$section_two[0]->main_title}}</h5>
                            <h2 class="title">{{$section_two[0]->subtitle}}</h2>
                        </div>
                    </div>
                    <!-- section-title end -->
                    <div class="row ttm-vertical_sep">
                        <div class="col-lg-12 mb-4">
                          <p>{!! $section_two[0]->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>