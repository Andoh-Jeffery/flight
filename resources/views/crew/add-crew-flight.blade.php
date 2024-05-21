@extends('layouts.layout')
@section('content')
<!-- Offcanval Overlay -->
<div class="offcanvas-overlay"></div>
<!-- Offcanval Overlay -->

<!-- Wrapper -->
<div class="wrapper">
    @extends('layouts.header')

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Sidebar -->
        @extends('layouts.sidebar')
        <!-- End Sidebar -->

        <!-- Main Content -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <!-- Base Horizontal Form With Icons -->
                    <div class="form-element py-30 multiple-column">
                        <h4 class="font-20 mb-20">Book Flight</h4>

                        <!-- Form -->
                        <form action="/add-flight-crew" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-2"></div>

                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Flight Number</label>
                                        <select name="flight_id" id="" class="theme-input-style">
                                            @foreach($flight as $flight)
                                            <option default>Choose Flight</option>
                                            <option value="{{$flight->id}}">{{$flight->flight_number}}</option>
                                            @endforeach
                                        </select>
                                        <!-- <input type="text" class="theme-input-style" placeholder="Enter Flight Number"
                                            name="flight_number" required> -->
                                    </div>
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Passenger Name</label>
                                        <select name="crew_id" id="" class="theme-input-style">
                                            @foreach($crew as $crew)
                                            <option default>Choose Flight</option>
                                            <option value="{{$crew->id}}">
                                                {{$crew->first_name}} {{$crew->last_name}}</option>
                                            @endforeach
                                        </select>
                                        <!-- <input type="text" class="theme-input-style" placeholder="Origin" name="origin"
                                            required> -->
                                    </div>

                                    <div class="form-row">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn btn-blank long">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>

                            <!-- End Form Row -->
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Horizontal Form With Icons -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
</div>
<!-- End Main Wrapper -->
</div>
<!-- End wrapper -->
@endsection