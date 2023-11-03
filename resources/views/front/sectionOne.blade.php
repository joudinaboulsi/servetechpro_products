<div class="row">
    <div class="col-lg-9">
        <!-- section-title -->
        <div class="section-title ">
            <div class="title-header">
                <h5>{{$section_one[0]->title}}</h5>
                <h2 class="title"><b>{{$section_one[0]->subtitle}}</b> </h2>
            </div>
        </div>
        <!-- section-title end -->
        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white margin_top20 res-991-margin_top10 margin_right20 res-991-margin_right15" href="#portfolio">{{$section_one[0]->link_one}}</a>
        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor  margin_top20 res-991-margin_top10 " href="#services">{{$section_one[0]->link_two}}</a>
    </div>

    <div class="col-lg-3">
        <div class="ttm-fid ttm-fid-with-icon text-center style2 ">
            <div class="ttm-fid-icon-wrapper">
                <i class="flaticon flaticon-suit"></i>
            </div>
            <div class="ttm-fid-contents">
                <h4 class="ttm-fid-inner">
                    <span data-appear-animation="animateDigits" data-from="0" data-to="2887" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">{{$section_one[0]->counter}}</span>
                </h4>
                <span class="ttm-fid-title">{{$section_one[0]->counter_title}}</span>
            </div>
        </div>
    </div>
</div>