@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Header</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateServicesHeader') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ $service->title }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="subtitle" class="form-label">Subtitle </label>
                                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $service->subtitle }}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label for="text" class="form-label">Text </label>
                                        <input type="text" name="text" class="form-control" id="text" value="{{ $service->text }}" />
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

            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Services</h5>
                    <div class="card-body">
                        <div class="demo-inline-spacing">
                            <a href="{{ route('createService') }}" class="btn btn-outline-primary">Add </a>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>SubTitle</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ $service->title }}</td>
                                            <td>{!! $service->subtitle !!}</td>
                                            <td>
                                                @if ($service->image)
                                                    <img src="../assets/img/services/{{ $service->image }}" width="100">
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-dark" href="{{ route('editService', $service->id) }}">Edit</a>
                                                <form action="{{route('deleteService', $service->id)}}" method="POST" class="d-inline">
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
