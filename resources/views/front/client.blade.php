<!--
<div class="container d-none d-sm-block">
    <div class="row slick_slider" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}},{"breakpoint":575,"settings":{"slidesToShow": 2}},{"breakpoint":400,"settings":{"slidesToShow": 1}}]}'>
        @foreach($clients as $client)
        <div class="col-lg-12">
            <div class="client-box">
                <div class="ttm-client-logo-tooltip" data-tooltip="{{$client->mini_title}}">
                    <div class="client-thumbnail">
                        @if(!empty($client->image))
                        <img class="img-fluid auto_size" width="160" height="98" src="../assets/img/client/{{$client->image}}" alt="{{$client->title}} - {{$client->subtitle}}">
                        @else
                        <h3>{{$client->title}} @if($client->subtitle)- {{$client->subtitle}} @endif</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
-->

<div class="container">
    <!--row -->
    <div class="row justify-content-center align-items-center">
        @foreach($clients as $client)
        <div class="col-4 col-md-3 col-lg-2">
            @if(!empty($client->image))
            <img class="img-fluid p-3" width="240" src="../assets/img/client/{{$client->image}}" alt="{{$client->title}} - {{$client->subtitle}}">
            @else
            <h3>{{$client->title}} @if($client->subtitle)- {{$client->subtitle}} @endif</h3>
            @endif
        </div>
        @endforeach
    </div>
    <!-- row end -->
</div>