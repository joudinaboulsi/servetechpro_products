@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Edit Home Slider</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateHomeSlider', $home->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ $home->title }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="content" class="form-label">Content</label>
                                        <input type="text" name="content" class="form-control" id="content" value="{{ $home->content }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="subtitle" class="form-label">Subtitle</label>
                                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $home->subtitle }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">Image</label>
                                        <div class="mb-3 mt-3">
                                            @if ($home->image)
                                            <img src="../assets/img/homeSlider/{{ $home->image }}" width="100">
                                            @endif
                                        </div>
                                        <input class="form-control" type="file" name="image" id="image" />
                                    </div>
                                </div>
                                <!-- <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="link" class="form-label">Add link</label>
                                        <input type="text" class="form-control" id="link" name="link" value="{{ $home->link }}" />
                                    </div>
                                </div> -->
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
