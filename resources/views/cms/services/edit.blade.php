@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Edit Service</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateService', $service->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{$service->title}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="subtitle" class="form-label">Subtitle</label>
                                        <textarea class="form-control" name="subtitle" id="subtitle"> {!! $service->subtitle !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">Image</label>
                                        <div class="mb-3 mt-3">
                                            @if ($service->image)
                                            <img src="../assets/img/services/{{ $service->image }}" width="100">
                                            @endif
                                        </div>
                                        <input class="form-control" type="file" name="image" id="image" />
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
