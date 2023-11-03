@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Section One</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateSectionOne') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ $section->title }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="subtitle" class="form-label">Subtitle</label>
                                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $section->subtitle }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="link_one" class="form-label">Link 1</label>
                                        <input type="text" name="link_one" class="form-control" id="link_one" value="{{ $section->link_one }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="link_two" class="form-label">Link</label>
                                        <input type="text" name="link_two" class="form-control" id="link_two" value="{{ $section->link_two }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="image_one" class="form-label">Image</label>
                                        @if ($section->image_one)
                                        <div class="mb-3 mt-3">
                                            <img src="../assets/img/section1/{{ $section->image_one }}" width="100">
                                        </div>
                                        @endif
                                        <input class="form-control" type="file" name="image_one" id="image_one" />
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="logo" class="form-label">Logo</label>
                                        @if ($section->logo)
                                        <div class="mb-3 mt-3">
                                            <img src="../assets/img/logo/{{ $section->logo }}" width="100">
                                        </div>
                                        @endif
                                        <input class="form-control" type="file" name="logo" id="logo" />
                                    </div>
                                </div> -->
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="counter_title" class="form-label">Counter Title</label>
                                        <input type="text" name="counter_title" class="form-control" id="counter_title" value="{{ $section->counter_title }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="counter" class="form-label">Number</label>
                                        <input class="form-control" type="number" name="counter" value="{{ $section->counter }}" id="counter" />
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