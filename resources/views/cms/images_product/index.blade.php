@extends('cms.layouts.app')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Images Slider</h5>
                    <div class="card-body">
                        <div class="demo-inline-spacing">
                            <a href="{{route('imageSliderCreate',$id)}}" class="btn btn-outline-primary">Add </a>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product_name</th>
                                        <th>Image</th>
                                        <th>Alt image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                               @foreach ($sliders as $slider)
                                        <tr>
                                            <td>{{$slider->product->product_name}}</td>
                                          
                                            <td>
                                                @if ($slider->image)
                                                    <img src="../assets/products/{{ $slider->image }}" width="100">
                                                @endif
                                            </td>
                                            <td>{{ $slider->alt_image }}</td>
                                            <td>
                                                <a class="btn btn-outline-dark" href="{{ route('SliderEdit', [$id,$slider->id]) }}">Edit</a>
                                                <form action="{{route('SliderDelete',[$id,$slider->id])}}" method="POST" class="d-inline">
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
