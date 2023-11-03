@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">SEO</h5>
                    <div class="card-body">
                        <form method="POST" action="{{route('updateSeo',$page->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title" class="form-label">Meta title (max 60 characters)</label>
                                        <input type="text" name="meta_title" class="form-control" id="title" value="{{$page->meta_title}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="description" class="form-label">Meta Description (max 160 characters)</label>
                                        <textarea class="form-control" name="meta_description" id="description">{!! $page->meta_description !!} </textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="keywords" class="form-label">Meta keywords (max 165 characters)</label>
                                        <textarea class="form-control" name="meta_keywords" id="keywords"> {!! $page->meta_keywords !!} </textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">Image (size 1200 x 627 px)</label>
                                        <div class="mb-3 mt-3">
                                            @if ($page->image)
                                            <img src="../assets/img/page/{{ $page->image }}" width="100" alt="{{$page->meta_title}}">
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
