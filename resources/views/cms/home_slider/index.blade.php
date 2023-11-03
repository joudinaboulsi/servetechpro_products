@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Home Slider</h5>
                    <div class="card-body">
                        <div class="demo-inline-spacing">
                            <a href="{{ route('createHomeSlider') }}" class="btn btn-outline-primary">Add </a>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>SubTitle</th>
                                        <th>Image</th>
                                        <!-- <th>Link</th> -->
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($home_sliders as $home_slider)
                                        <tr>
                                            <td>{{ $home_slider->title }}</td>
                                            <td>{{ $home_slider->content }}</td>
                                            <td>{{ $home_slider->subtitle }}</td>
                                            <td>
                                                @if ($home_slider->image)
                                                    <img src="../assets/img/homeSlider/{{ $home_slider->image }}" width="100">
                                                @endif
                                            </td>
                                            <!-- <td>{{ $home_slider->link }}</td> -->
                                            <td>
                                                <a class="btn btn-outline-dark d-inline" href="{{ route('editHomeSlider', $home_slider->id) }}">Edit</a>
                                               <form method="post" action="{{route('deleteHomeSlider', $home_slider->id)}}" class="d-inline">
                                                    @csrf
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
