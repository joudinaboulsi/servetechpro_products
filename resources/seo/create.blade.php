@extends('cms.layouts.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col">
            <div class="card mb-4">
                <h5 class="card-header">Create Page</h5>
                <div class="card-body">
                    <div class="col-md-12">
                        <form method="POST" action="{{ route('store_page') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 mt-4">
                                <label for="defaultFormControlInput" class="form-label">name</label>
                                <input type="text" name="page_name" class="form-control" id="defaultFormControlInput"
                                    placeholder="Page Name" aria-describedby="defaultFormControlHelp" />
                            </div>
                            <div class="mb-3 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Meta title</label>
                                <input type="text" name="meta_title" class="form-control" id="defaultFormControlInput"
                                    placeholder="Meta title" aria-describedby="defaultFormControlHelp" />
                            </div>

                            <div class="mb-3 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Meta keywords</label>
                                <input type="text" name="meta_keywords" class="form-control"
                                    id="defaultFormControlInput" placeholder="Meta keywords"
                                    aria-describedby="defaultFormControlHelp" />
                            </div>
                            <div class="mb-3 mt-4">

                                <textarea class="form-control" name="meta_description" aria-label="With textarea"
                                    placeholder="Meta description" id="editor"></textarea>

                            </div>

                            <div class="mb-3 mt-4">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" name="image" id="formFile" />
                            </div>
                            <div class="mb-3 mt-4">
                                <button type="submit" class="btn btn-outline-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop