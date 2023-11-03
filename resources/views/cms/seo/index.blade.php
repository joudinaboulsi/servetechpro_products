@extends('cms.layouts.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Striped Rows -->
    <div class="card">

        <h5 class="card-header">Seo Pages</h5>
       
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>Page</th>
                        <th>Meta title</th>
                        <th>Meta keywords</th>
                        <th>Meta description</th>
                        <th>image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($pages as $page)
                        <tr>
                             <td>{{ $page->name }}</td>
                          <td>{{ $page->meta_title }}</td>
                       
                          <td>{!! $page->meta_keywords !!}</td>
                          <td>{!!  $page->meta_description !!}</td>
                            <td>
                                @if ($page->image)
                                <img src="../assets/seo/{{ $page->image }}" width="150">
                                @endif
                            </td>
                        
                        
                            <td>
                                <a href="{{route('seoEdit',$page->id)}}" class="btn btn-outline-success">Edit</a>
                             
                            </td>

                        </tr>

                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Striped Rows -->


</div>


@endsection