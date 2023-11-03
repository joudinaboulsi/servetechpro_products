@extends('cms.layouts.app')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">

                    <h5 class="card-header">Settings</h5>
                    <div class="card-body">
                        <form method="POST" action="{{route('updateSettings')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="logo" class="form-label">Logo (size 100 x 120 px)</label>
                                        <div class="mb-3 mt-3">
                                            @if ($settings->logo)
                                            <img src="../assets/{{ $settings->logo }}" width="100" alt="{{$settings->name}}">
                                            @endif
                                        </div>
                                        <input class="form-control" type="file" name="logo" id="logo" value="{{ $settings->logo }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Name </label>
                                        <input type="text" name="name" class="form-control" id="name" value="{{ $settings->name }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="phone_one" class="form-label">Phone one </label>
                                        <input type="text" name="phone_one" class="form-control" id="phone_one" value="{{ $settings->phone_one }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="phone_two" class="form-label">Phone two </label>
                                        <input type="text" name="phone_two" class="form-control" id="phone_two" value="{{ $settings->phone_two }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="address" class="form-label">Address </label>
                                        <input type="text" name="address" class="form-control" id="address" value="{{ $settings->address }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="email" class="form-label">Email </label>
                                        <input type="email" name="email" class="form-control" id="email" value="{{ $settings->email }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="working_days" class="form-label">Working Days </label>
                                        <input type="text" name="working_days" class="form-control" id="working_days" value="{{ $settings->working_days }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="working_hours" class="form-label">Working Hours </label>
                                        <input type="text" name="working_hours" class="form-control" id="working_hours" value="{{ $settings->working_hours }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="closed_days" class="form-label">Closed Days </label>
                                        <input type="text" name="closed_days" class="form-control" id="closed_days" value="{{ $settings->days_closed}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="closed_hours" class="form-label">Closed Hours </label>
                                        <input type="text" name="closed" class="form-control" id="closed_hours" value="{{ $settings->closed }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="map" class="form-label">Map </label>
                                        <input type="text" name="map" class="form-control" id="map" value="{{ $settings->map }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 mt-3">
                                        <label for="brochure" class="form-label">Brochure</label>
                                        @if($settings->brochure)
                                        <div class="mb-3 mt-3">
                                            <embed name="brochure" src="../assets/{{ $settings->brochure }}" type="application/pdf">             
                                        </div>                        
                                        @endif
                                        <input class="form-control" type="file" name="brochure" id="brochure" value="{{ $settings->brochure }}" />
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
