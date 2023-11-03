@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">About</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateAbout') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ $about->title }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="content_one" class="form-label">Content One</label>
                                        <textarea class="form-control" name="content_one" id="content_one">{!! $about->content_one !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="content_two" class="form-label">Content Two</label>
                                        <textarea class="form-control" name="content_two" id="content_two">{!! $about->content_two !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">Image</label>
                                        @if ($about->image)
                                        <div class="mb-3 mt-3">
                                            <img src="../assets/img/about/{{ $about->image }}" width="100">
                                        </div>
                                        @endif
                                        <input class="form-control" type="file" name="image" id="image" />
                                    </div>
                                </div>
                                <!-- <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="logo" class="form-label">Logo</label>
                                        @if ($about->logo)
                                        <div class="mb-3 mt-3">
                                            <img src="../assets/img/logo/{{ $about->logo }}" width="100">
                                        </div>
                                        @endif
                                        <input class="form-control" type="file" name="logo" id="logo" />
                                    </div>
                                </div> -->
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="counter_title" class="form-label">Counter Title</label>
                                        <input type="text" name="counter_title" class="form-control" id="counter_title" value="{{ $about->counter_title }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="number" class="form-label">Number</label>
                                        <input class="form-control" type="number" name="counter" value="{{ $about->counter }}" id="number" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <button type="submit" class="btn btn-outline-primary">Update</button>
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
