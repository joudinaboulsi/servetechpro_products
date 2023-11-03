@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Footer</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateFooter') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="subtitle" class="form-label">Subtitle</label>
                                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $footer->subtitle }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title" class="form-label">Title </label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ $footer->title }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="text" class="form-label">text</label>
                                        <input type="text" name="text" class="form-control" id="text" value="{{ $footer->text }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="link" class="form-label">Link</label>
                                        <input type="text" name="link" class="form-control" id="link" value="{{ $footer->link }}" />
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
