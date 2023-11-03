@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Create Product</h5>
                    <div class="card-body">
                        <form method="POST" action="{{route('productUpdate',$product->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="product_name" class="form-label">Product Name</label>
                                        <input type="text" name="product_name" class="form-control" id="product_name"  value="{{$product->product_name}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="desc" class="form-label">Description</label>
                                        <textarea class="form-control" name="desc" id="desc" >{!! $product->desc !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        @if ($product->image)
                                         <img src="{{ asset('assets/product/'.$product->image) }}" height="100" class="d-block">
                                       @endif
                                        <label for="image" class="form-label pt-2">Image</label>
                                        <input class="form-control" type="file" name="image" id="image" />
                                    </div>
                                </div>
                              
                            </div>

                            <div class="divider divider-info">
                                <div class="divider-text">Product Details</div>
                            </div>
                            <div class="col-12">
                                @if ($product->background)
                                <img src="{{ asset('assets/product/'.$product->background) }}" height="100" class="d-block">
                              @endif
                                <div class="mb-3 mt-3">
                                    <label for="background" class="form-label">Background</label>
                                    <input class="form-control" type="file" name="background" id="background" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title_details" class="form-label">Title</label>
                                        <input type="text" name="title_details" class="form-control" id="title_details" value="{{$product->title_details}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="subtitle_details" class="form-label">Subtitle</label>
                                        <input type="text" name="subtitle_details" class="form-control" id="subtitle_details"  value="{{$product->subtitle_details}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                    
                                        <label for="desc1" class="form-label">Description 1</label>
                                        <textarea class="form-control" name="desc1" id="desc1" >{!! $product->desc1 !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="tag1" class="form-label">Tag 1</label>
                                        <input type="text" name="tag1" class="form-control" id="tag1"  value="{{$product->tag1}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="tag_p1" class="form-label">Content Tag 1</label>
                                        <input type="text" name="tag_p1" class="form-control" id="tag_p1"  value="{{$product->tag_p1}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="tag2" class="form-label">Tag 2</label>
                                        <input type="text" name="tag2" class="form-control" id="tag2" value="{{$product->tag2}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="tag_p2" class="form-label">Content Tag 2</label>
                                        <input type="text" name="tag_p2" class="form-control" id="tag_p2"  value="{{$product->tag_p2}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title_desc2" class="form-label">Title 1</label>
                                        <input type="text" name="title_desc2" class="form-control" id="title_desc2"  value="{{$product->title_desc2}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="desc2" class="form-label">Deacription 2</label>
                                        <textarea class="form-control" name="desc2" id="desc2" >{!! $product->desc2 !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <button type="submit" class="btn btn-outline-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
