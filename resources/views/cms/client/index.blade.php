@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Clients</h5>
                    <div class="card-body">
                        <div class="demo-inline-spacing">
                            <a href="{{ route('createClient') }}" class="btn btn-outline-primary">Add </a>
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
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ $client->title }}</td>
                                            <td>{{ $client->mini_title }}</td>
                                            <td>
                                                @if ($client->image)
                                                    <img src="../assets/img/client/{{ $client->image }}" width="100">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('editClient', $client->id) }}" class="btn btn-outline-dark">Edit </a>
                                                <form action="{{route('deleteClient', $client->id)}}" method="POST" class="d-inline">
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
