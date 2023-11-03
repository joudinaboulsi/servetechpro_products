<div class="container">
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <!-- section title -->
            <div class="section-title text-center">
                <div class="title-header">
                    <h5>{{$services_pages[0]->title}}</h5>
                    <h2 class="title">{{$services_pages[0]->subtitle}}</h2>
                </div>
            </div>
            <!-- section title end -->
        </div>
    </div>
    <!-- row -->
    <div class="row slick_slider slick-arrows-style1" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":840,"settings":{"slidesToShow": 2}},{"breakpoint":650,"settings":{"slidesToShow": 1}}]}'>
       
        @foreach($services_images as $image)
        <div class="col-md-4 col-sm-6">
            <!--featured-imagebox-->
            <div class="featured-imagebox featured-imagebox-services style1">
                <div class="featured-content text-center">
                    <div class="featured-title">
                        <h3>{{$image->title}}</h3>
                    </div>
                    <div class="featured-desc">
                        <p>{!!$image->subtitle !!}</p>
                    </div>
                </div>
                <!-- featured-thumbnail -->
                <div class="featured-thumbnail">
                    <img class="img-fluid" src="../assets/img/services/{{$image->image}}" alt="{{$image->title}}">
                </div>
                <!-- featured-thumbnail end-->
            </div>
            <!-- featured-imagebox end-->
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-12">
            <p class="text-center padding_top10">{{$services_pages[0]->text}}</p>
        </div>
    </div>
</div>