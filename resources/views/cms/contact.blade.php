@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Contact</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateContact') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title" class="form-label">Title </label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ $contact->title }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title_contact" class="form-label">Title Contact</label>
                                        <input type="text" name="title_contact" class="form-control" id="title_contact" value="{{ $contact->title_contact }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title_address" class="form-label">Title Address</label>
                                        <input type="text" name="title_address" class="form-control" id="title_address" value="{{ $contact->title_address }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title_working" class="form-label">Title Working</label>
                                        <input type="text" name="title_working" class="form-control" id="title_working" value="{{ $contact->title_working }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title_message" class="form-label">Title Message</label>
                                        <input type="text" name="title_message" class="form-control" id="title_message" value="{{ $contact->title_message }}" />
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
