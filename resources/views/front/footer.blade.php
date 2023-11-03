
<div class="first-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-9 widget-area">
                <div class="section-title mb-0">
                    <div class="title-header">
                        <h5 class="ttm-textcolor-white">{{$footer[0]->title}}</h5>
                        <h2 class="title">{{$footer[0]->subtitle}}</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-md-right">
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white margin_top30 res-991-margin_top0 " href="#contact">{{$footer[0]->link}}</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="second-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 widget-area">
                <div class="widget widget_text margin_right10 clearfix">
                    <div class="footer-logo">
                        <img id="footer-logo-img" class="img-fluid auto_size float-left mr-2" height="60" width="50" src="../assets/{{ app('contact')->logo }}" alt="{{ app('contact')->name }} logo">
                        <h1 class="text-uppercase">{{ app('contact')->name }}</h1>
                    </div>
                    <div class="textwidget widget-text">
                        <p>{{$footer[0]->text}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 widget-area">
                <div class="widget widget_text margin_right10 clearfix">
                    <h3 class="widget-title">Contact us</h3>
                    <div class="textwidget widget-text">
                        <div class="call_detail">
                            <h3 class="fs-24">
                                <a href="tel:{{ app('contact')->phone_one }}">{{ app('contact')->phone_one }}</a> | <a href="tel:{{ app('contact')->phone_two }}">{{ app('contact')->phone_two }}</a>
                            </h3>
                            <h4 class="fs-20 ttm-textcolor-white">
                                <a href="mailto:{{ app('contact')->email }}"><u>{{ app('contact')->email }}</u></a>
                            </h4>
                            <div class="padding_top0 padding_bottom10">
                                <p class="res-575-margin_bottom0">{{ app('contact')->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bottom-footer-text copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <span class="cpy-text">Copyright &copy; <?php echo date("Y"); ?> <a href="/" class="ttm-textcolor-skincolor font-weight-500">ServeTech Pro</a>. All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>
</div>