@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Products Header</h5>
                    <div class="card-body">
                        <form method="POST" action="{{route('productStorePage')}}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ $page->title }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="subtitle" class="form-label">Subtitle </label>
                                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $page->subtitle }}" />
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

            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Products</h5>
                    <div class="card-body">
                        <div class="demo-inline-spacing">
                            <a href="{{route('productCreate')}}" class="btn btn-outline-primary">Add </a>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Description 1</th>
                                        <th>Tag 1</th>
                                        <th>Content 1</th>
                                        <th>Tag 2</th>
                                        <th>Content 2</th>
                                        <th>title 1</th>
                                        <th>Desciption 2</th>
                                        <th>Background</th>
                                        <th>Image</th>
                                        <th>Images Slider</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{!! $product->desc !!}</td>
                                            <td>{{ $product->title_details }}</td>
                                            <td>{{ $product->subtitle_details }}</td>
                                            <td>{!! $product->desc1 !!}</td>
                                            <td>{{ $product->tag1 }}</td>
                                            <td>{{ $product->tag_p1 }}</td>
                                            <td>{{ $product->tag2 }}</td>
                                            <td>{{ $product->tag_p2 }}</td>
                                            <td>{{ $product->title_desc2 }}</td>
                                            <td>{!! $product->desc2 !!}</td>
                                            <td>
                                                @if ($product->background)
                                                    <img src="../assets/product/{{ $product->background }}" width="100">
                                                @endif
                                            </td>
                                            <td>
                                                @if ($product->image)
                                                    <img src="../assets/product/{{ $product->image }}" width="100">
                                                @endif
                                            </td>
                                          
                                            <td>  <a class="btn btn-outline-dark" href="{{ route('imagesSlider', $product->id) }}">Show</a></td>

                                            <td>
                                                <a class="btn btn-outline-dark" href="{{ route('productEdit', $product->id) }}">Edit</a>
                                                <form action="{{ route('productDelete', $product->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach 
                                </tbody> 
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
