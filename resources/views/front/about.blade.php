<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-8">
            <div class="ttm_single_image-wrapper imagestyle">
                <img class="img-fluid auto_size" width="539" height="672" src="../images/welcome-img.jpg" alt="About {{ app('contact')->name }}">
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="margin_top30">
                <!-- section title -->
                <div class="section-title">
                    <div class="title-header">
                        <h5>ABOUT US</h5>
                        <h2 class="title">{{$about[0]->title}}</h2>
                    </div>
                    <div class="title-desc">
                        <p>{!!$about[0]->content_one !!}</p>
                    </div>
                </div>
                <!-- section title end -->
                <div class="row no-gutters margin_top40">
                    <div class="col-sm-7">
                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                            @foreach ($about as $item)
                                {!! str_replace('<ul>', '<ul style="list-style: none;">', str_replace('<li>', '
                                <li><i class="ti ti-check" style="left:-40px!important"></i>', $item->content_two)) !!}
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-5">
                        <!-- ttm-fid -->
                        <div class="ttm-fid ttm-fid-with-icon ttm-bgcolor-grey style1 res-575-margin_top30">
                            <div class="ttm-fid-icon-wrapper">
                                <i class="flaticon flaticon-warehouse"></i>
                            </div>
                            <div class="ttm-fid-contents">
                                <h4 class="ttm-fid-inner">
                                    <span data-appear-animation="animateDigits" data-from="0" data-to="{{$about[0]->counter}}" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">{{$about[0]->counter}}</span>
                                </h4>
                                <span class="ttm-fid-title">{{$about[0]->counter_title}}</span>
                            </div>
                        </div>
                        <!-- ttm-fid end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row end -->
</div>
