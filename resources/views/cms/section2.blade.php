@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Section Two</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateSectionTwo') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 mt-3">
                                        <label for="image_one" class="form-label">Image</label>
                                        @if ($section->image_one)
                                        <div class="mb-3 mt-3">
                                            <img src="../assets/img/section2/{{ $section->image_one }}" width="100">
                                        </div>
                                        @endif
                                        <input class="form-control" type="file" name="image_one" id="image_one" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ $section->title }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="link" class="form-label">Link</label>
                                        <input type="text" name="link" class="form-control" id="link" value="{{ $section->link }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="main_title" class="form-label">Subtitle</label>
                                        <input type="text" name="main_title" class="form-control" id="main_title" value="{{ $section->main_title }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="subtitle" class="form-label">Main Title</label>
                                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $section->subtitle }}" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3 mt-3">
                                        <label for="content" class="form-label">Content</label>
                                        <textarea class="form-control" name="content" aria-label="With textarea" id="content">{!! $section->content !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3 mt-3">
                                        <label for="image_two" class="form-label">Image Two</label>
                                        @if ($section->image_two)
                                        <div class="mb-3 mt-3">
                                            <img src="../assets/img/section2/{{ $section->image_two }}" width="100">
                                        </div>
                                        @endif
                                        <input class="form-control" type="file" name="image_two" id="image_two" />
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
