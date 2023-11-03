@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> --}}

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header"> Pages & seo Section</h5>
                    <div class="card-body">

                        <div class="demo-inline-spacing">
                            <a href="{{ route('create_page') }}" class="btn btn-outline-primary">Add </a>

                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>meta title</th>
                                    <th>meta description</th>
                                    <th>meta keywords</th>
                                    <th>image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($pages as $page)
                                    <tr>
                                        <td>{{ $page->page_name }}</td>
                                        <td>{!!  $page->meta_title !!}</td>
                                        <td>{!!  $page->meta_description !!}</td>
                                        <td>{{ $page->meta_keywords }}</td>
                                         <td>
                                            @if ($page->image)
                                                <img src="../assets/img/page/{{ $page->image }}" width="100">
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-dark"
                                                href="{{ route('edit_page', $page->id) }}">Edit</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Basic Bootstrap Table -->
            </div>
        @endsection
