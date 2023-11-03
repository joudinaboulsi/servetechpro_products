<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!-- section-title -->
            <div class="section-title title-style-center_text">
                <div class="title-header">
                    <h5>CONTACT US</h5>
                    <h2 class="title">{{$contact[0]->title}} </h2>
                </div>
            </div><!-- section-title end -->
        </div>
    </div>

    <div class="row ttm-bgcolor-darkgrey">
        <div class="col-lg-12">
            <div class="row ttm-vertical_sep">
                <div class="col-lg-4">
                    <div class="featured-icon-box icon-align-before-content spacing-5">
                        <div class="featured-icon ">
                            <div class="ttm-icon ttm-icon_element-style-square ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon flaticon-email-1"></i>
                            </div>
                        </div>
                        <div class="featured-content padding_left20">
                            <div class="featured-title">
                                <h3 class="margin_bottom5 fs-24">{{$contact[0]->title_contact}}</h3>
                            </div>
                            <div class="featured-desc">
                                <p>
                                    <a href="tel:{{ app('contact')->phone_one }}">{{ app('contact')->phone_one }}</a><br>
                                    <a href="tel:{{ app('contact')->phone_two }}">{{ app('contact')->phone_two }}</a><br>
                                    <a href="mailto:{{ app('contact')->email }}">{{ app('contact')->email }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-icon-box icon-align-before-content spacing-5">
                        <div class="featured-icon ">
                            <div class="ttm-icon ttm-icon_element-style-square ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon  flaticon-placeholder"></i>
                            </div>
                        </div>
                        <div class="featured-content padding_left20">
                            <div class="featured-title">
                                <h3 class="margin_bottom5 fs-24">{{$contact[0]->title_address}}</h3>
                            </div>
                            <div class="featured-desc">
                                <p>{{ app('contact')->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-icon-box icon-align-before-content spacing-5">
                        <div class="featured-icon ">
                            <div class="ttm-icon ttm-icon_element-style-square ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon  flaticon-clock"></i>
                            </div>
                        </div>
                        <div class="featured-content padding_left20">
                            <div class="featured-title">
                                <h3 class="margin_bottom5 fs-24 ">{{$contact[0]->title_working}}</h3>
                            </div>
                            <div class="featured-desc">
                                <p>{{ app('contact')->working_days }} {{ app('contact')->working_hours }} <br> {{ app('contact')->days_closed }} {{ app('contact')->closed }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row ttm-bgcolor-white spacing-6 mb_190 ">
                <div class="col-lg-6 padding_right50">
                    <!-- section-title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h2 class="title fs-44 ">{{$contact[0]->title_message}}</h2>
                        </div>
                    </div><!-- section-title end -->
                </div>
                <div class="col-lg-6">
                    <form id='contact_form' method="post" action="{{route('contactStore')}}" class='request_qoute_form wrap-form clearfix'>
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="email" type="email" value="" placeholder="Email Address" required="required"></span>
                            </div>
                            <div class="col-lg-12">
                                <span class="text-input"><textarea name="message" rows="3" placeholder="Your Message" required="required"></textarea></span>
                            </div>
                            <div class="col-lg-12">
                                <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" type="submit" rel=noopener noreferrer>Send Message!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
